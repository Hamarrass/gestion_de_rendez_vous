<?php
namespace App\Http\Controllers;

use App\Reclamation;
use App\TypeReclamation;
use Illuminate\Http\Request;
use PDF;

// Unirest to consume API
use Unirest\Request as Http;
require_once dirname(__DIR__, 3)."/vendor/mashape/unirest-php/src/Unirest.php"; // Only in PHP 7

class DossierController extends Controller{

    public function dossier(Request $request){

        $code_dossier = $request->code_dossier;

        $dossier = $this->getDossierDetailsFromApi($code_dossier);

        if ($dossier == "") {
            return view('notfound');
        } else {
            $dossier->code_dossier = $code_dossier;
        }

        $type_reclamations  = TypeReclamation::cursor();
        $reclamation_clients = Reclamation::where('ref_dossier',$dossier->ref)->get();
//        dd($dossier);

//        return redirect()->route("dossier")->with(['reclamation_clients'=>$reclamation_clients, 'dossier'=>$dossier]);
        return view('dossier', compact('dossier','type_reclamations','reclamation_clients'));
    }

    public function dossierDirectLink($code) {

        $dossier = $this->getDossierDetailsFromApi($code);

        if ($dossier == "") {
            return view('notfound');
        } else {
            $dossier->code_dossier = $code;
        }

        $type_reclamations= TypeReclamation::cursor();
        $reclamation_clients = Reclamation::where('ref_dossier',$dossier->ref)->get();
        return view('dossier', compact('dossier','type_reclamations','reclamation_clients'));
    }

    private function getDossierDetailsFromApi($codeDossier) {

        $endpoint = 'https://cabek.cdma-solutions.ma/api/dossier';
        $headers = ['Accept' => 'application/json'];
        $query = ['_token' => env('SMS_TOKEN'), 'code' => $codeDossier];

        return Http::post($endpoint, $headers, $query)->body;
    }

    public function download(){

        $dossier = unserialize(base64_decode(request('dossier')));

        $status = $this->generateStatus($dossier);

        PDF::SetTitle('Bienvenu sur CABEK');
        PDF::AddPage();
        PDF::writeHTML(\View::make('test')->with([
            'matricule'      => $dossier->matricule,
            'status'         => $status,
            'ref'            => $dossier->ref,
            'date_reception' => $dossier->date_reception,
            'date_sinistre'  => $dossier->date_sinistre
        ])->render(),true,false,true,false,'');

        return PDF::Output('fiche.pdf');
    }

    private function generateStatus($dossier){

        $state = "";

        if (!$dossier->date_devis) {
            $state = 'Manque devis ';
        } else {
            if (!$dossier->date_accord) {
                $state=' Entraint de Traitement';
            } else {
                if ($dossier->date_rapport && $dossier->date_apres && $dossier->date_facture) {
                    $state = 'Rapport Transmis';
                } else {
                    if($dossier->date_apres && !$dossier->date_facture)
                        $state = 'Manque Facture';
                    elseif(!$dossier->date_facture && !$dossier->date_apres)
                        $state='Manque Photos Apres  et Facture';
                    elseif(!$dossier->date_apres  && $dossier->date_facture)
                        $state='Manque Photos Apres';
                    else
                        $state = 'Entraint de traitement';

                }
            }
        }

        return $state;

    }

}
