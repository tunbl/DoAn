<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','langdingpageController@index')->name('index');
Route::get('/blank','langdingpageController@blank');

Route::get('/product/{slug}/{id}','langdingpageController@product')->name('product');
Route::get('/add-comment','langdingpageController@addComment')->name('add-comment');
Route::get('/store','langdingpageController@store');
Route::get('/store-filter','langdingpageController@filter');
// Route::get('/find-product','langdingpageController@findProduct')->name('findProduct');
Route::get('login','LoginController@index')->name('ShowLogin');
Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');

Route::get('cus/profile/{id}','KhachHangController@index')->name('cus-profile');
Route::post('cus/profile','KhachHangController@update')->name('update-cus-info-normal');

Route::get('cus/profile-changepass/','KhachHangController@newPassWord')->name('password-index');
Route::post('cus/profile/changepassword','KhachHangController@updatePass')->name('update-cus-info-pass');
Route::get('cus/history/{id}','KhachHangController@history')->name('history-index');
Route::get('cus/history-detail/{id}','KhachHangController@historyDetail')->name('history-detail');
Route::post('loginCus','LoginController@loginCus')->name('loginCus');
Route::get('logoutCus','LoginController@logoutCus')->name('logoutCus');
Route::get('callback/{social}','SocialController@handleProviderCallback');
Route::get('login/{social}','SocialController@redirectProiver')->name('loginSocial');
Route::get('register','RegisterController@index')->name('register');
Route::post('register','RegisterController@register')->name('submitRegister');

Route::group(['prefix'=>'quan-tri','middleware'=>['auth']],function(){
    Route::get('ho-so','Auth\ChangePasswordController@indexChange')->name('profile');
    Route::post('profile-update','Auth\ChangePasswordController@postChange')->name('update-profile');
    Route::resource('dash-board','DashboardController');
    Route::resource('san-pham','ProductController');
    Route::resource('danh-muc-cap-1','CatalogLevel1Controller');
    Route::resource('quan-ly-don-hang','OrderController');
    Route::resource('dai-ly','AgencyController');

    Route::get('search-product','SearchController@index')->name('search-index');
    Route::get('search/product','SearchController@search')->name('search-find-product');
    Route::get('search-user','SearchController@searchUserIndex')->name('search-user-index');
    Route::get('search/user','SearchController@search')->name('search-find-user');

    Route::get('admin','AdminController@index')->name('admin-list');
    Route::get('admin/edit/{id}','AdminController@edit')->name('admin-edit');
    Route::get('admin/update/{id}','AdminController@update')->name('admin-update');
    Route::resource('khach-hang','CustomerController');
    Route::get('catalog/{id_parent}','AjaxController@getCatalog');
    //slide
    Route::resource('slide','SlideController');

    
    //logo & favicon
    Route::get('favicon','InformationController@indexFavicon')->name('favicon');
    Route::get('favicon/{id}','InformationController@getFavicon');
    Route::post('favicon/{id}','InformationController@postFavicon')->name('favicon-ss');
    Route::get('logo','InformationController@indexLogo')->name('logo');
    Route::get('logo/{id}','InformationController@getLogo');
    Route::post('logo/{id}','InformationController@postLogo')->name('logo-ss');

    //trong admin
    Route::get('dang-ky-nhan-tin','SupportController@getSub')->name('sub');
    Route::get('ho-tro','SupportController@getSup')->name('sup');
    Route::get('chi-tiet-ho-tro/{id}','SupportController@viewSup')->name('viewsup');

    // ngoài website
    Route::post('postsupport','PageController@postContact')->name('postsupport');
    Route::post('postsubscribe','PageController@postSubscribe')->name('postsubscribe');
});
Route::get('search','PostController@search');

Route::group(['prefix' => 'wishlist'],function()
{
    Route::get('/','WishListController@index')->name('wishlist.index');
    Route::post('/','WishListController@add')->name('wishlist.add');
    Route::get('/details','WishListController@details')->name('wishlist.details');
    Route::delete('/{id}','WishListController@delete')->name('wishlist.delete');
});
//shopping cart
Route::get('add-to-card','CartController@add')->name('addCart');
Route::get('shopping-cart', [
    'as'=>'shopping-cart',
    'uses'=>'CartController@getShoppingCart'
]);
Route::get('xoaitem/{rowId}','CartController@deleteItem')->name('deleteItem');
Route::post('update-cart','CartController@updateCart')->name('updateCart');
    


Route::get('/sendmailler','mailer@sendmailler')->name('sendmailler');

Route::get('/viewcart','langdingpageController@viewcart')->name('viewcart');
Route::get('/deleteItem/{id}','langdingpageController@deleteItem')->name('deleteItem');
Route::get('/autocomplete','AutocompleteController@Autocomplete')->name('autocomplete');

Route::get('/checkout','mailer@getmail')->name('checkout');
Route::get('/test', function () {
    return view('test1');
});

Route::get('/catalog={id}','getbyid@selectbydid')->name('catalog');

