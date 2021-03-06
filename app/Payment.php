<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'status', 'order_id'
    ];

    public function order() {
        return $this->belongsTo('App\Order');
    }
}
