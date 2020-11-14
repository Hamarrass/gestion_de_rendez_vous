<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriseRendezVous extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'phone',
        'responsable',
        'raison',
        'matricule',
        'date_de_sinistre',
        'date_rendez_vous',
        'used',
    ];

    public function  fast_events(){
        return $this->hasOne('App\FastEvent','id','fast_events_id');
    }


    public function  events(){
        return $this->hasOne('App\Event','fast_events_id','fast_events_id');
    }



    /**
     * @inheritDoc
     */
    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }
}
