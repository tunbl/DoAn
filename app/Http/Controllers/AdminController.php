<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    public function index(){
    	$user = User::where('role',2)->paginate(10);
    	return view('admin.user.admin.list-admin',['users'=>$user]);
    }
    public function edit($id){
    	$user = User::find($id);
    	return view('admin.user.admin.edit-admin',['admin'=>$user]);
    }
    public function update(Request $request,$id){
    	$user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->role = $request->get('role');
        $user->save();
        return redirect()->route('admin-list');
    }
}
