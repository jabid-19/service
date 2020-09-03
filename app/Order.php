<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['first_name', 'last_name', 'address', 'user_id', 'phone', 'total_price', 'services'];

    public function services(){
        return $this->belongsToMany('App\Services');
    }
}
