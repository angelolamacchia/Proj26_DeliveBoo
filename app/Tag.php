<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'cucina'
    ];

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
