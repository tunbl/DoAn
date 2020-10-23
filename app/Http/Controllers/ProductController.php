<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
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
                $product = Product::where('id_user',$id_user)->orderBy('id', 'desc')->paginate(10);
                
                
                break;
            case 2:
                // $product = Product::orderBy('id', 'desc')->paginate(10);
            $product = Product::select('product.*','users.name as nameAgency')->leftJoin('users', 'users.id', '=', 'product.id_user')->paginate(10);
            break;
            
            default:
                # code...
                break;
        }
        
        return view('admin.product.list-product',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalog = Catalog::get();
        $list = self::data_tree($catalog);
        return view('admin.product.add-product',['catalog_1'=>$list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:2|max:100',
            'id_parent' => 'required',
            // 'id_chill' => 'required',
            'detail' => 'required',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
            'id_parent.required'=>'is-invalid',
            // 'id_chill.required'=>'is-invalid',
            'detail.required'=>'is-invalid',
        ]);
        $add = new Product;
        $add->name = $request->name;
        $add->slug = changeTitle($request->name);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $arr =  array();
            foreach($file as $file){
                $name = $file->getClientOriginalName();
                $image = $name;
                array_push($arr, $image);
                $file->move("img/",$image);
            }
            $add->image = implode(",", $arr);
        }else{
            $add->image= "";
        }
        $add->id_catalog = $request->id_parent;
        // $add->id_chill = $request->id_chill;
        $add->id_user = $request->id_user;
        $add->price_unit = $request->price_unit;
        $add->price_promotion = $request->price_promotion;
        $add->content = $request->content;
        $add->detail = $request->detail;
        $add->new = $request->new;
        $add->qty = $request->qty;
        $add->save();
        return redirect()->route('san-pham.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('san-pham.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Product::select('product.*','users.name as nameAgency')->leftJoin('users', 'users.id', '=', 'product.id_user')->where('product.id','=',$id)->first();
        $catalog = Catalog::get();
        $list = self::data_tree($catalog);
        
        return view('admin.product.edit-product',['edit'=>$edit,'catalog_1'=>$list]);
    }
    public function data_tree($data, $parent_id = 0,$level = 0){
        $result = [];
        foreach($data as $item){
            if($item['id_chill'] == $parent_id){
                $item['level'] = $level;
                $result[] = $item;
                $child = self::data_tree($data, $item['id'], $level + 1);
                unset($data[$item['id']]);
                $result = array_merge($result,$child);
            }
        }
        return $result;
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
        $this->validate($request,
        [
            'name' => 'required|min:2|max:100',
            'id_parent' => 'required',
            // 'id_chill' => 'required',
            'detail' => 'required',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
            'id_parent.required'=>'is-invalid',
            // 'id_chill.required'=>'is-invalid',
            'detail.required'=>'is-invalid',
        ]);
        $Update = Product::find($id);
        $Update->slug = changeTitle($request->name);
        $Update->name = $request->get('name');
        $Update->id_catalog = $request->get('id_parent');
        $Update->new = $request->get('new');
        $Update->content = $request->get('content');
        $Update->qty = $request->get('qty');
        $Update->detail = $request->get('detail');
        $Update->price_unit = $request->get('price_unit');
        if($request->hasFile('image'))
        {   
            $file = $request->file('image');
            $arr =  array();
            foreach($file as $file){
                $name = $file->getClientOriginalName();
                $image = $name;
                array_push($arr, $image);
                $file->move("img/",$image);
            }
            $Update->image = implode(",", $arr);

        }
        $Update->save();
        return redirect()->route('san-pham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    
}
