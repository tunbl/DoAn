<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support;
class SupportController extends Controller
{
    public function getSub(){
		$email = Support::where('subscribe',0)->get();
        return view('admin.support.subscribe',['email'=>$email]);
    }
	public function getSup(){
		$email = Support::where('subscribe',1)->get();
        return view('admin.support.support',['email'=>$email]);
    }
	public function viewSup($id){
		$edit = Support::find($id);
        return view('admin.support.detail-support',['edit'=>$edit]);
    }
}
