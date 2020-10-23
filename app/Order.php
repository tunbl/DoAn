<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    public function cart(){
        return $this->hasMany('App\Cart','id_order','id');
    }

    public function status(){
        return $this->hasMany('App\Status','id_status','id');
    }
}
