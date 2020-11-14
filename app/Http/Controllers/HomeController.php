<?php

namespace App\Http\Controllers;

use App\Event;
use App\FastEvent;
use App\PriseRendezVous;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rendez_vous= PriseRendezVous::with('fast_events')->with(array('events' => function($query) {
            $query->withTrashed();
        }))->simplePaginate(4);

        return view('gestion_rendez_vous/rendez_vous', compact('rendez_vous'));
    }
}
