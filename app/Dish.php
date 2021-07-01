<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'portata'
    ];

    public function plates() {
        return $this->hasMany('App\Plate');
    }

    public function orders() {
        return $this->belongsToMany('App\Order');
    }
}
