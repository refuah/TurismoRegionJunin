<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodging extends Model
{
    protected $fillable = [
        'name', 'url-photo', 'description', 'position', 'price', 'tour_id',
    ];

    public function tour(){

        return $this->belongTo('App\Tour');
    }
}
