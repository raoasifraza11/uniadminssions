<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    public function city_id(){
        return $this->belongsTo(City::class);
    }
    
}
