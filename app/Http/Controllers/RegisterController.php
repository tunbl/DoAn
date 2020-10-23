<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\MessageBag;
use App\User;
class RegisterController extends Controller
{
    public function index(){
    	return view('register');
    }
    public function register(Request $request){
    	$rules = [
            'nameUser' => 'required',
            'emailUser' => 'required|email',
            'phoneUser' => 'required|regex:/[0-9]{10}/',
            'passwordUser' => 'required|min:5',
            'addressUser' => 'required'
        ];
        $mess = [
            'nameUser.required' => "Vui lòng nhập họ và tên",
            'emailUser.required' => "Vui lòng nhập họ và tên",
            'emailUser.email' =>"Vui lòng nhập đúng định dạng email",
            'phoneUser.required' => "Vui lòng nhập số điện thoại",
            'phoneUser.regex' => "Số điện thoại gồm 10 số",
            'passwordUser.required' => "Vui lòng nhập mật khẩu",
            'passwordUser.min' => "Mật khẩu phải có ít nhất 5 ký tự",
            'addressUser.required' =>"Vui lòng nhập địa chỉ"
        ];
        $validator = Validator::make($request->all(),$rules,$mess);

        if($validator->fails()){
            return response()->json([
                'error'=> true,
                'message' =>$validator->errors()
            ],200); 
         }else{
            $nameUser = $request->input('nameUser');
            $phoneUser = $request->input('phoneUser');
            $emailUser = $request->input('emailUser');
            $passwordUser = $request->input('passwordUser');
            $addressUser = $request->input('addressUser');

            $flag = User::where('phone',$phoneUser)->first();
            $flag2 = User::where('email',$emailUser)->first();

            
            if( empty($flag) && empty($flag2) ){

            	User::Create([
            		'name'=> $nameUser,
            		'phone'=> $phoneUser,
	    			'email'=> $emailUser,
	    			'password'=> bcrypt($passwordUser),
	    			'role'=> 0,
	    			'address'=> $addressUser,
            	]);
                return response()->json([
                'error'=> false,
                'message' =>"Đăng ký thành công"
            ],200);
            }else{
            	if(!empty($flag) ){
            		 $validator->getMessageBag()->add('errorloginPhone', 'Số điện thoại đã có người sử dụng');
            	}
	        	if(!empty($flag2)){
	            		$validator->getMessageBag()->add('errorloginEmail', 'Email đã có người sử dụng');
	        	}
                return response()->json([
                'error'=> true,
                'message' => $validator->errors()
            	],200);
            } 
         }
    }
}
