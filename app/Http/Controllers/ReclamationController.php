<?php

namespace App\Http\Controllers;

use App\Reclamation;
use App\TypeReclamation;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// Unirest to consume API
use Illuminate\Support\Facades\Validator;
use Unirest\Request as Http;
require_once dirname(__DIR__, 3)."/vendor/mashape/unirest-php/src/Unirest.php"; // Only in PHP 7


class ReclamationController extends Controller {

    public function index() {

        $type_reclamations= TypeReclamation::cursor();

        //the number of complaints  with answer
        $reclamations         = DB::table('reclamations')->whereNotNull('reponse_gestionnaire')->paginate(6);
        $reclamationssent     = count($reclamations);

        //the number of complaints  without answer
        $reclamations         = Reclamation::with('type_reclamations')->whereNull('reponse_gestionnaire')->paginate(6);
        $reclamationsreceived = count($reclamations);

        return  view('reclamation',compact('reclamations','reclamationsreceived','reclamationssent','type_reclamations'));

    }

    public function inbox()
    {
        return redirect()->route('reclamations.index');
    }


    public function sent()
    {
        $type_reclamations= TypeReclamation::cursor();

        //the number of complaints  without answer
        $reclamations         = DB::table('reclamations')->whereNull('reponse_gestionnaire')->paginate(6);
        $reclamationsreceived = count($reclamations);

        //the number of complaints  with answer
        $reclamations         = Reclamation::with('type_reclamations')->whereNotNull('reponse_gestionnaire')->paginate(6);
        $reclamationssent     = count($reclamations);

        return  view('reclamation',compact('reclamations','reclamationssent','reclamationsreceived','type_reclamations'));

    }



    public function store(Request $request){

        $refDossier           = $request->input('dossier_id');
        $reclamation_clients  = Reclamation::where('ref_dossier',$refDossier)->get();
        $codeDossier          = $request->input('code_dossier');
        $countclaim=Reclamation::Where('ref_dossier',$refDossier)->count();
 

        if($countclaim > 10){

            return redirect()->route("dossier_direct", ['code' => $codeDossier])
                             ->with(['reclamation_clients'=>$reclamation_clients, 'exceedlimit' => true]);
        }

        $request->validate([
            'reclamation' => 'required',
            'observation_client' => 'required',
        ]);

        // Extract data

        $typeReclamation   = $request->input('reclamation');
        $observationClient = $request->input('observation_client');


        $endpoint = 'https://cabek.cdma-solutions.ma/api/reclamationclient.php';
        $headers  = ['Accept' => 'application/json'];
        $query    = [
            '_token'              => env('CABEK_TOKEN'),
//            'ref_dossier'         => '32/20' ,
            'ref_dossier'         => $refDossier,
            'type_reclamation'    => $typeReclamation,
            'observation_client'  => $observationClient,
             'used'  => 0
        ];

        $reclamationResponse = Http::post($endpoint, $headers, $query)->body;


    if($reclamationResponse) {
        $reclamation = new Reclamation;
        $reclamation->id                 = $reclamationResponse->id;
        $reclamation->ref_dossier        = $refDossier;
        $reclamation->type_reclamation   = $typeReclamation;
        $reclamation->observation_client = $observationClient;
        $reclamation->created_at         = $reclamationResponse->created_at;
        $reclamation->save();
        }

        return redirect()->route("dossier_direct", ['code' => $codeDossier])->with(['reclamation_clients'=>$reclamation_clients]);
    }


    public function answerCalaim() {

        // TODO: add middlware later
        $reclamationId        = request('reclamation_id');
        $responseGestionnaire = request('reponse_gestionnaire');
        $company              = request('compagnie');
        $seenBy               = request('vu_par');

        // Validate input
        $validator = Validator::make(
            ['reclamation_id' => $reclamationId, 'reponse_gestionnaire' => $responseGestionnaire, 'compagnie' => $company, 'vu_par' => $seenBy],
            ['reclamation_id' => 'required|numeric', 'reponse_gestionnaire' => 'required', 'compagnie' => 'nullable', 'vu_par' => 'required']
        );

        if($validator->fails()) {
            return $validator->messages();

        }else {

            return Reclamation::where('id', $reclamationId)
                       ->update([
                           'reponse_gestionnaire' => trim($responseGestionnaire),
                           'compagnie' => trim($company),
                           'vu_par' => trim($seenBy),
                           'updated_at' => Carbon::now()->toDateTimeString()
                       ]);
        }

    }

    public function show($reclamation)
    {
        //this command means the people who see this message in the inbox
        $reclamation = Reclamation::find($reclamation);
        $reclamation->seen_by =  '1';
        $reclamation->save();

        //the number of complaints  without answer
        $reclamations         = DB::table('reclamations')->whereNull('reponse_gestionnaire')->get();
        $reclamationsreceived = count($reclamations);

        //the number of complaints  with answer
        $reclamations         = DB::table('reclamations')->whereNotNull('reponse_gestionnaire')->get();
        $reclamationssent     = count($reclamations);

        $reclamation          = Reclamation::find($reclamation->id);
//        dd($reclamation);

        return  view('replyreclamation',compact('reclamation','reclamationsreceived','reclamationssent'));
    }


    public function update(Request $request,$reclamation)
    {

//        dd($request->get('reponse_gestionnaire'));
        $reclamation = Reclamation::find($reclamation);
        $reclamation->reponse_gestionnaire = $request->get('reponse_gestionnaire');
        $reclamation->user_id =  "1";
        $reclamation->save();

        return redirect()->route('reclamations.index');

//        return redirect('/coronas')->with('success', 'Corona Case Data is successfully updated');
    }


}
