<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
class AjaxController extends Controller
{
    public function getCatalog($id_parent)
    {
        $chill = Catalog::where('id_chill',$id_parent)->get();
        foreach($chill as $con)
        {
            echo "<option value='".$con->id."'>".$con->name."</option>";
        }
    }
}
