<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
// use App\Cart;
use App\Catalog;
use Session;
use Cart;
use App\Brand;
use App\Slide;
use App\Comment;
use Auth;
class langdingpageController extends Controller
{
   
    public function index()
    {
      
      
        $products = Product::where('price_promotion','!=',0)->orderBy('price_promotion','desc')->take(12)->get();
        $brand = Brand::where("id",'>',1)->inRandomOrder()->take(9)->get();
        $catalog = Catalog::get();
        $slide = Slide::get();
        foreach($products as $product){
          $product->image = explode(',', $product->image);
        }
        // $img_aray = explode(",", $products->image);
        // echo $img_aray[0]; 
        return view('index', 
        [
          'products'=>$products,
          'catalog'=>$catalog,
          'brand'=>$brand,
          'slides'=>$slide
          ]);
    }

    public function product(Request $req)
    {
      $comment = Comment::select('comment.*','users.name')->where('id_product','=',$req->id)->leftJoin('users','users.id','=','comment.id_user')->get();
      $product = Product::where('id',$req->id)->first();
      $product->image = explode(',', $product->image);
      return view('product',
      [
        'product'=>$product,
        'comments'=>$comment
        ]);

    }
    public function addComment(Request $req){
        $comment = new Comment;

        $idUser = $req->input('idUser');
        $idProduct = $req->input('idProduct');
        $content = $req->input('comment');

        $comment->id_user = $idUser;
        $comment->id_product = $idProduct;
        $comment->content = $content;
        $comment->save();
        $div = `<li>
                  <div class="review-heading">
                    <h5 class="name">`.Auth::user()->name.`</h5>
                    <p class="date">`.date('d/m/Y').`</p>
                  </div>
                  <div class="review-body">
                    <p>`.$content.`</p>
                  </div>
                </li>`;
        return response()->json([
          'name'=> Auth::user()->name,
          'date'=> date('d/m/Y'),
          'content'=> $content
        ]);
    }
    public function store(Request $req)
    {
      if(isset($_GET['minPrice'])){
        $min = $req->minPrice;
        $max = $req->maxPrice;
        $product = product::where('price_unit','>=',$min)->where('price_unit','<=',$max)->get();
        // dd($product);
        return view('store',compact('product'));
      }else{
        $product = product::paginate(9);
        return view('store',compact('product'));
      }
      
    }

    public function viewcart()
    {
      $items = Cart::content();
      $cart = Cart::count() ;
      if($cart == 0) {
        return view('test1');
      }else{
        return view('viewcart',['items'=>$items]);
      }
    
      
    }
    public function deleteItem($rowId){
      Cart::remove($rowId);
      return redirect()->back();
  }

  
  //filter 
  public function filter(Request $req){
    return response()->json([
      'html' => product::filter($req->all())
    ]);
  }
}
