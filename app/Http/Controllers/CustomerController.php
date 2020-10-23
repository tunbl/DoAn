<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cus = User::where('role',0)->paginate(10);
        return view('admin.user.customer.list-customer',['cus'=>$cus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.customer.register');
        // return view('admin.user.customer.register');
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
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->role = $request->get('role');
        $user->save();
        switch ($user->role) {
            case 0:
                return redirect()->route('khach-hang.index');
                break;
            case 1:
                return redirect()->route('dai-ly.index');
                break;
            case 2:
                return redirect()->route('dash-board.index');
                break;
            
            default:
                # code...
                break;
        }
        return redirect()->route('khach-hang.index');

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
        $cus = User::find($id);
        return view('admin.user.customer.edit-customer',['cus'=>$cus]);
        //
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
        //
        $cus = User::find($id);
        $cus->name = $request->get('name');
        $cus->email = $request->get('email');
        $cus->password = $request->get('password');
        $cus->phone = $request->get('phone');
        $cus->address = $request->get('address');
        $cus->role = $request->get('role');
        $cus->save();
        return redirect()->route('khach-hang.index');
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
