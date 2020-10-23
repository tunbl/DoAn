<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
class ChangePasswordController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function indexChange(){
    	$id = Auth::user()->id;
        $edit = User::find($id);
        return view('admin.profile',['edit'=>$edit]);
    }
    public function getChange($id){
    	
        $edit = User::find($id);
        return view('admin.profile',['edit'=>$edit]);
    }
    public function postChange(Request $request){
        $this->validate($request,
        [
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ],
        [
            'oldpassword.required'=>'Chưa nhập mật khẩu cũ.',
            'password.required'=>'Chưa nhập mật mới.',
            'password.confirmed'=>"không khớp"
        ]);
        $hashedPassword = Auth::user()->password;
     
        if(Hash::check($request->oldpassword,$hashedPassword))
        {
      
         
            $user = User::find(Auth::id());
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
           
           
        }else
        {
            return redirect()->back();
        }
    }
}
//
