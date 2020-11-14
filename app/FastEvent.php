<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FastEvent extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'start', 'end', 'color','fast_events_id'];

    public function  prise_rendez_vouses(){
        return $this->belongsTo('App\PriseRendezVous');
    }


//    /**
//     * @inheritDoc
//     */
    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }
}
