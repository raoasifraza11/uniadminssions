<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Institute extends Model
{
    public function category_id(){
        return $this->belongsTo(Category::class);
    }

    public function country_id(){
        return $this->belongsTo(Country::class);
    }

    public function city_id(){
        return $this->belongsTo(City::class);
    }

    public function address_id(){
        return $this->belongsTo(Address::class);
    }
}
