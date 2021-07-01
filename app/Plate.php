<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{

    protected $fillable = [
        'nome_piatto', 'prezzo', 'ingredienti', 'descrizione', 'visibilita', 'user_id', 'dish_id'
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }
    
    public function dish() {
        return $this->belongsTo('App\Dish');
    }

    public function orders() {
        return $this->belongsToMany('App\Order');
    }
}
