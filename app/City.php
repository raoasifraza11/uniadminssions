<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    public function country_id(){
        return $this->belongsTo(Country::class);
    }
}
