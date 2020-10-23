<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = "catalog";
    public function product(){
        return $this->hasMany('App\Product','id_catalog','id');
    }
}
