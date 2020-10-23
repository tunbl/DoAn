<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;
class SearchController extends Controller
{
    public function index(){
    	return view('admin.search.list-search');
    }
    public function search(Request $req){

    		$search = $req->searchProduct;

        	switch (Auth::user()->role) {
    		case 1:
    			$id_user = Auth::user()->id;

    			$product = Product::select('product.*')->where(function($query) use($search,$id_user){
    				$query->where('product.id','=',$search)->where('product.id_user','=',$id_user);
    			})->orWhere(function($query)use($search,$id_user){
    				$query->where('product.name','like','%'.$search.'%')->where('product.id_user','=',$id_user);
    			})->get();
    			
    			break;
    		case 2:
    			$product = Product::select('product.*','users.name as nameAgency')->leftJoin('users', 'users.id', '=', 'product.id_user')->where('product.id','=',$search)->orWhere('product.name','like','%'.$search.'%')->get();
    			break;
    		default:
    			# code...
    			break;
    	}
    	
    	return view('admin.search.list-search',['product'=>$product]);
    }
    public function searchUserIndex(){
    	return view('admin.search.list-search-user');
    }
    public function searchUser(Request $req){
    	$search = $req->searchProduct;
    	$user  = User::where('email','=',$search)->orWhere('name','like','%'.$search.'%')->get();
    	return view('admin.search.list-search-user',['users'=>$user]);
    }
}
