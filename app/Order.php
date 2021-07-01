<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nome', 'cognome', 'email', 'numero_telefono','indirizzo', 'totale', 'minuti_consegna', 'info'
    ];

    public function plates() {
        return $this->belongsToMany('App\Plate');
    }

    public function payment() {
        return $this->hasOne('App\Payment');
    }
}
