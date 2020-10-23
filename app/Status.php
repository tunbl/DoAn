<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";
    public function order(){
        return $this->belongsTo('App\Order','id_status','id');
    }
}
