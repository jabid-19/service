<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name', 'price'
    ];
    public function orders(){
        return $this->belongsToMany('App\Orders');
    }
}
