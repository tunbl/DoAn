<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class CatalogLevel1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog = Catalog::get();
        $list = self::data_tree($catalog);
        foreach($list as $item){
            $item['nameParent'] = self::findParent($item['id_chill']);
        }
        return view('admin.catalog.vl1.list-catalog',['list'=>$list]);
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
        
        return view('admin.catalog.vl1.add-catalog',['list'=>$list]);
    }
    public function findParent($id){
        $catalog = Catalog::find($id);
        $parentName = $catalog['name'];
        return $parentName ?? '';
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
            'name' => 'required|min:2|max:255',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
        ]);

        $level_parent = Catalog::find($request->id_parent);

        $add = new Catalog;
        $add->name = $request->name;
        $add->slug = changeTitle($request->name);
        $add->id_chill = $request->id_parent;
        if(!empty($level_parent)){
            $add->level = $level_parent['level'] + 1;
        }else{
            $add->level = 0;
        }
        $add->save();
        return redirect()->route('danh-muc-cap-1.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delete = Catalog::find($id);
        $delete->delete();
        return redirect()->route('danh-muc-cap-1.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Catalog::find($id);
        return view('admin.catalog.vl1.edit-catalog',['edit'=>$edit]);
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
            'name' => 'required|min:2|max:255',
        ],
        [
            'name.required'=>'is-invalid',
            'name.min'=>'is-invalid',
            'name.max'=>'is-invalid',
        ]);
        $Update = Catalog::find($id);
        $Update->name = $request->get('name');
        $Update->slug = changeTitle($request->name);
        $Update->save();
        return redirect()->route('danh-muc-cap-1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Catalog::find($id);
        $delete->delete();
        return redirect()->route('danh-muc-cap-1.index');
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
}
