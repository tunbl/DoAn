<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autocomplete;
use App\product;

use Input;
class AutocompleteController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function autocomplete(Request $request)
    {
        $term  = $request->term; // jquery

        $data=Product::Where('name','like','%'.$term.'%')
            ->take(9)
            ->get();
        //$results = array();
        //foreach($data as $key =>$v){
        //     $results[]=[
        //         'id'=>$v->id,'value'=>$v->name
        //         // ,'value'=>$v->price_unit
                
        // ];
           // $results [] = array(
             //   'id'=>$v->id,
               // 'value'=>$v->name,
                //'name'=>$v['price_unit']
            //);
            // $results = '
            // hello
            // ';  
        
   
        //}
        // return response()->json($results);
        return json_encode($data);
        // return $result;
        
    
                    // $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                    // foreach($data as $row)
                    // {
                    //  $output .= '
                    //  <li><a href="#">'.$row->name.'</a></li>
                    //  ';
                    // }
                    // $output .= '</ul>';
                    // return $output;
    
    
     
       
    }
}
