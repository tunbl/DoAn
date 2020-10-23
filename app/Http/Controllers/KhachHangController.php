<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Validator;
use Illuminate\Support\MessageBag;
use App\Order;
use App\Order_detail;
class KhachHangController extends Controller
{
    public function index($id){
    	$user = User::find($id);
    	return view('profile',['user'=>$user]);
    }

    public function newPassWord(){
    	return view('changepass');
    }
    public function update(Request $req){
    	$id = $req->input('id');
    	$user = User::find($id);
    	$user->name = $req->input('name');
    	$user->phone = $req->input('phone');
    	$user->address = $req->input('address');
    	$user->save();
    	return response()->json([
    		'mess'=>"thanh cong r"
    	]);
    }
    public function updatePass(Request $req){
    	
    	$rules = [
            'OldPassWord' => 'required|min:5',
            'NewPassWord' => 'required|min:5',
            'ConfirmNewPassWord' => 'required|same:NewPassWord',
        ];
        $mess = [
            'OldPassWord.required' => "Vui lòng nhập mật khẩu cũ",
            'NewPassWord.required' => "Vui lòng nhập mật khẩu mới",
            'OldPassWord.min' => "Mật khẩu phải có ít nhất 5 ký tự",
            'NewPassWord.min' => "Mật khẩu phải có ít nhất 5 ký tự",
            'ConfirmNewPassWord.required' =>"Vui lòng nhập xác nhận mật khẩu mới",
            'ConfirmNewPassWord.same' =>"Chưa đúng với mật khẩu mới"
        ];
        $validator = Validator::make($req->all(),$rules,$mess);
        if($validator->fails()){
            return response()->json([
                'error'=> true,
                'message' =>$validator->errors()
            ],200); 
         }else{
         	$id = $req->input('id');
            $new = $req->input('NewPassWord');
            $old = $req->input('OldPassWord');
            $user = User::find($id);
            if(Hash::check($old,$user->password)){
            	$user->password = bcrypt($new);
	    		$user->save();
            }else{
            	$errors = new MessageBag(['errorlogin'=>'Mật khẩu cũ không chính xác']);
            	return response()->json([
	    		'error'=> true,
                'message' =>$errors
	    	]);
            }
	    	
	    	return response()->json([
	    		'error'=> false,
                'message' =>"Thay đổi thành công"
	    	]);
         }
    	
    }
    public function history($id){
        $order = Order::select('order.*','status.name as nameStatus')->leftJoin('status', 'status.id', '=', 'order.id_status')->where('order.id_user','=',$id)->orderBy('id','desc')->paginate(10);
        
        foreach($order as $item){
            $product = Order_detail::select('name_product')->where('id_order','=',$item->id)->get();
            $item->setAttribute('name_product',$product);
        }
        return view('history',['order'=>$order]);
    }
    public function historyDetail($id){
        $orderDetai = Order_detail::where('id_order','=',$id)->get();
        return view('history-detail',['order'=>$orderDetai]);
    }
}
