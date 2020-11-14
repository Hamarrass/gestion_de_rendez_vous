<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{


    public function  responsables(){
        return $this->belongsTo('App\PriseRendezVous');
    }

    /**
     * @inheritDoc
     */
    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }
}
