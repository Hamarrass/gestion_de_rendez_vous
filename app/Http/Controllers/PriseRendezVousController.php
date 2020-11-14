<?php

namespace App\Http\Controllers;

use App\Event;
use App\FastEvent;
use App\PriseRendezVous;
use App\Responsable;
use App\Mail\RendezVousConfirmee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PriseRendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rendez_vous= PriseRendezVous::with('fast_events')->with(array('events' => function($query) {
            $query->withTrashed();
        }))->simplePaginate(4);

        return view('gestion_rendez_vous/rendez_vous', compact('rendez_vous'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function priserendezvous(){

       $fastevent= FastEvent::cursor();
       return view('gestion_rendez_vous/prise_rendez_vous',compact('fastevent'));

   }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.Q
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'nom'    =>'required',
                'prenom' =>'required',
                'email'  =>'email',
                'date_rendez_vous' =>'required',

            ]
        );

        $rendez_vous = new PriseRendezVous;
        $rendez_vous ->nom              = $request->input('nom');
        $rendez_vous->prenom            = $request->input('prenom');
        $rendez_vous->email             = $request->input('email');
        $rendez_vous->fast_events_id    = $request->input('responsable');
        $rendez_vous->phone             = $request->input('phone');
        $rendez_vous->raison            = $request->input('raison');
        $rendez_vous->matricule         = $request->input('matricule');
        $rendez_vous->date_de_sinistre  = $request->input('date_de_sinistre');
        $rendez_vous->date_rendez_vous  = $request->input('date_rendez_vous');
        $rendez_vous->used              = $request->input('used');
        $rendez_vous->save();

        Event::where('id',  $rendez_vous->date_rendez_vous)->delete();



        return  redirect()->back()->with('success','le rendez vous créé avec succès!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PriseRendezVous  $priseRendezVous
     * @return \Illuminate\Http\Response
     */
    public function show(PriseRendezVous $priseRendezVous)
    {
        dd('okay');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PriseRendezVous  $priseRendezVous
     * @return \Illuminate\Http\Response
     */
    public function edit(PriseRendezVous $priseRendezVous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PriseRendezVous  $priseRendezVous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=PriseRendezVous::find($id);
        $data->date_rendez_vous=$request->date_rendez_vous;
        $data->used = "1";
        $data->save();
        $data =PriseRendezVous::find($id);


//        Mail::to($data->email)->send( new RendezVousConfirmee());

        return  redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PriseRendezVous  $priseRendezVous
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriseRendezVous $priseRendezVous)
    {
        //
    }
}
