<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function indexFavicon()
    {
        return view('admin.favicon');
    }
    public function getFavicon($id)
    {
        $inf = Information::find($id);
        return view('admin.favicon',['inf'=>$inf]);
    }
    public function postFavicon(Request $request,$id)
    {
        $Update = Information::find($id);
        if($request->hasFile('favicon'))
        {
            $file = $request->file('favicon');
            $name = $file->getClientOriginalName();
            $favicon = $name;
            $file->move("upload/",$favicon);
            $Update->favicon = $favicon;
        }
        $Update->save();
        return redirect()->route('favicon');
    }
    public function indexLogo()
    {
        return view('admin.logo');
    }
    public function getLogo($id)
    {
        $inf = Information::find($id);
        return view('admin.logo',['inf'=>$inf]);
    }
    public function postLogo(Request $request,$id)
    {
        $Update = Information::find($id);
        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $name = $file->getClientOriginalName();
            $logo = $name;
            $file->move("upload/",$logo);
            $Update->logo = $logo;
        }
        $Update->save();
        return redirect()->route('logo');
    }
}
