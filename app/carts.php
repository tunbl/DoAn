<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = "cart";
    public function order(){
        return $this->belongsTo('App\Order','id_order','id');
    }
}
