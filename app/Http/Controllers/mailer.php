<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\carts;
use Cart;
use App\Order;
use App\User;
use Auth;
use App\Order_detail;

use DB;
class mailer extends Controller
{
   public function getmail(request $req)
   {

      $cart = Cart::count() ;
      if($cart == 0) {
        return view('test1');
      }else{
         $items = Cart::content();
         return view('checkout',['items'=>$items]);
        
      }
        
   }

   public function sendmailler(Request $req)
      {
         include 'class.phpmailer.php';
         include 'class.smtp.php';          
         include 'functions.php';

         $price = 0;
         foreach(Cart::content() as $item){
            $price += ($item->qty*$item->price);
         }
         $fullname=(string) $_GET['fullname'];
         $email= (string)$_GET['email'];
         $phone= (string)$_GET['phone'];
         $address= (string)$_GET['address'];
         $note= (string)$_GET['payment'];
     
         $order = new Order;
         $order->name = $fullname;
         $order->id_user = Auth::user()->id;
         $order->address = $address ;
         $order->phone = $phone;
         $order->email = $email ;
         $order->total = $price ;
         $order->note = $note ;
         $order->save();
        
         foreach(Cart::content() as $item){
               $order_detail = new Order_detail;
               $id_agency = Product::select('id_user')->where('id','=',$item->id)->first();
               $order_detail->id_product	= $item->id;
               $order_detail->id_order = $order->id;
               $order_detail->name_product	= (string)$item->name;
               $order_detail->price_product	= $item->price;
               $order_detail->qty_product = $item->qty;
               $order_detail->id_agency   = $id_agency->id_user;
               $order_detail->id_status	= 1;
               $order_detail->save();
            }
   
            
      $title="Miker Ecommecre";
      $content = 'cảm ơn đã sử dụng dịch vụ của chúng tôi. Đơn hàng của quý vị sẻ được gửi trong thời gian sớm nhất cảm ơn quý khách đã sử dụng dịch vu của chúng tôi.';
      $nTo = $_GET['fullname'];
      $mTo = $_GET['email'];
      $diachi = 'sitrandeptrai@gmail.com';

      $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
            
       return redirect()->route('index')->with(Cart::Destroy());
       
      }
}
 function FunctionName()
{
  
   
   
   

   // if($mail==1  &&  $flight->save())
   
}