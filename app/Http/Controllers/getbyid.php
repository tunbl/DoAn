<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Catalog;
use app\Product;
class getbyid extends Controller
{
    public function selectbydid($id)
    {
        $catalogs = Catalog::get();
        $products = product::get()->where('id_parent',$id);
        return view('catalog',['catalogs'=>$catalogs]);
    }
  
}
