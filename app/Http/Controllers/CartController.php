<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Carts;
use App\Order;
class CartController extends Controller
{
    public function add(Request $request){
        $id = $request->input('id');
        $pro = Product::where('id',$id)->first();
        if($pro->price_promotion == 0){
            $a = $pro->price_unit;
        }else{
            $a = $pro->price_promotion;
        }
        $qty = $request->input('qty');
        Cart::add(['id' => $id, 'name' => $pro->name, 'qty' => $qty, 'price' => $a,'weight'=>0 , 'options' => ['image' => $pro->image]]);

        return response()->json([
            'qty'=>Cart::count(),
            'mess'=>"thanh cong r"
        ]);
       
    }
    public function deleteItem($rowId){
        Cart::remove($rowId);
        return redirect()->route('index');
    }
    
}