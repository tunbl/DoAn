<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Status;
use App\Catalog;
use App\Product;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('layout',function($view){
        //     $san_pham = Product::all();
        //      $view->with(['san_pham',$san_pham]);
        // });
        // view()->composer('layout', function ($view)
        // {
        //     if(Session('cart')){
        //         $old_cart = Session::get('cart');
        //         $cart = new cart($old_cart);
        //          $view->with(
        //             ['cart'=>Session::get('cart'),
        //             'product_cart'=>$cart->items, 
        //             'totalPrice'=>$cart->totalPrice,
        //             'totalQualQty'=>$cart->totalQualQty ]);
                
        //     }
        // });
        view()->composer('*',function($view){
            $status = Status::all();
            $danh_muc = Catalog::all();
            $san_pham = Product::all();
            return $view->with(['status'=>$status,'danh_muc'=>$danh_muc,'san_pham'=>$san_pham]);
        });
    }
}
