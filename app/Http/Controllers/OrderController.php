<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\carts;
use App\Order_detail;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $role = Auth::user()->role;
        
        switch ($role) {
            case 1:
                $id_user = Auth::user()->id;
                $order = Order_detail::select('order_detail.id as idProduct','order_detail.id_status as statusOd','order.*')->leftJoin('order', 'order.id', '=', 'order_detail.id_order')->paginate(15);
                break;
            case 2:
                $order = Order::orderBy('id','desc')->paginate(15);
                break;
            default:
                # code...
                break;
        }
        return view('admin.order.list-order',['order'=>$order]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        switch (Auth::user()->role) {
            case 1:
                 $edit = Order_detail::select('order_detail.id as idOd','order_detail.id_status as orderOd','order.*')->leftJoin('order', 'order.id', '=', 'order_detail.id_order')->find($id);
                return view('admin.order.edit-order',['edit'=>$edit]);
                break;
            case 2:
                $edit = Order::find($id);
                $orderDetail = Order_detail::where('id_order','=',$id)->get();
                return view('admin.order.edit-order',['edit'=>$edit,'orderDetail' => $orderDetail]);
                break;
            default:
                # code...
                break;
        }
       

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        switch (Auth::user()->role) {
            case 1:
                $Update = Order_detail::find($id);
                $Update->id_status = $request->get('id_status');
                $Update->save();
                break;
            case 2:
                $Update = Order::find($id);
                $Update->id_status = $request->get('id_status');
                $Update->save();
            break;
            
            default:
                # code...
                break;
        }
        return redirect()->route('quan-ly-don-hang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
