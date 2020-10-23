<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\MessageBag;
class LoginController extends Controller
{
	public function index(){
 		return view('auth.login');
    }
    public function login(Request $request){
 		$data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if(Auth::attempt($data)){
            switch (Auth::user()->role) {
                case 0:
                    Auth::logout();
                    return redirect()->route('ShowLogin');
                    break;
                case 1:
                    return redirect('quan-tri/dash-board');
                    break;
                case 2:
                    return redirect('quan-tri/dash-board');
                    break;
                
                default:
                    # code...
                    break;
            }
        }else{
            return redirect()->route('ShowLogin');
        }	
    }
    public function loginCus(Request $request){
        $rules = [
            'username' => 'required|email',
            'password' => 'required|min:5'
        ];
        $mess = [
            'username.required' => "Vui lòng nhập email",
            'username.email' =>"Vui lòng nhập đúng định dạng email",
            'password.required' => "Vui lòng nhập mật khẩu",
            'password.min' => "Mật khẩu phải có ít nhất 5 ký tự"
        ];
        $validator = Validator::make($request->all(),$rules,$mess);
         if($validator->fails()){
            return response()->json([
                'error'=> true,
                'message' =>$validator->errors()
            ],200); 
         }else{
            $username = $request->input('username');
            $password = $request->input('password');

            if(Auth::attempt(['email'=>$username,'password'=>$password])){
                return response()->json([
                'error'=> false,
                'message' =>"Đăng nhập thành công"
            ],200);
            }else{
                $errors = new MessageBag(['errorlogin'=>'Tài khoản hoặc mật khẩu không đúng']);
                return response()->json([
                'error'=> true,
                'message' => $errors
            ],200);
            } 
         }
    }
    public function logoutCus(){
        Auth::logout();
        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
