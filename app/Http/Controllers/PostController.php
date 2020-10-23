<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function search (Request $request)
    {
        $searchData = $request->searchData;
        $data = DB::table('product')
                ->where('name','like','%'.$searchData.'%')
                ->get();

    
                return view('search',
            [
                'products'=> $data,
                'searchData'=> $searchData
            ]);
    }
}
