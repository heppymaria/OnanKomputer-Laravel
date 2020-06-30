<?php

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
/* FrontEnd Location */
Route::get('/','IndexController@index');
Route::get('/home_admin','IndexController@admin_index');
Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detailpro');

//////search/////
Route::any ('/search', function(Request $request){
    $search = $request->search;
    $products=Products_model::where('p_name','LIKE','%'.$search.'%')->orWhere('p_code', 'LIKE', '%'.$search.'%')->get();
    return view('frontEnd.index')->withDetails($products)->withQuery($search);
});
////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');
///// Cart Area /////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');


//compare area
Route::post('/addToCompare','CompareController@addToCompare')->name('addToCompare');
Route::get('/viewcompare','CompareController@index');
Route::get('/compare/deleteItem/{id}','CompareController@deleteItem');

/// Simple User Login /////
Route::get('/login_page','UsersController@login_index');
Route::get('/register_page','UsersController@register_index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

//administrator login
Route::get('/login_admin','AdministratorController@login_index');
Route::get('/register_admin','AdministratorController@register_index');
Route::post('/register_admin','AdministratorController@register');
Route::post('/admin_login','AdministratorController@login');
Route::get('/logout','AdministratorController@logout');


////// User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    
    Route::get('trackOrder/{id}',function($id){
        $orderData = App\Orders_model::where('id',$id)->get();
        return view('users.track',['data' => $orderData]);
      });
    Route::get('/order/deleteItem/{id}','OrdersController@deleteItem');

    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');

    Route::get('/check-out','CheckOutController@index');
    Route::post('/submit-checkout','CheckOutController@submitcheckout');
    Route::get('/order-review','OrdersController@index');
    Route::post('/submit-order','OrdersController@order');
    Route::get('/cod','OrdersController@cod');
    Route::get('/paypal','OrdersController@paypal');
    Route::get('/bank-transfer','OrdersController@banktransfer');

});

Route::group(['middleware'=>'AdminLogin_middleware'],function (){
    Route::get('/admin_account','AdministratorController@account');
    Route::put('/update-password-admin/{id}','AdministratorController@updatepassword');
    Route::get('/home_admin','IndexController@admin_index');
    Route::put('/update-profile/{id}','AdministratorController@updateprofile');
    Route::put('/update-password/{id}','AdministratorController@updatepassword');
    

    Route::get('/manage-product','AdminController@manage_product_index')->name('manage_product');

     /// Category Area
     
     Route::get('/category','AdministratorController@category_index');
     Route::get('delete-category/{id}','CategoryController@destroy');
     Route::get('/check_category_name','CategoryController@checkCateName');
     /// Products Area
     Route::resource('/product','ProductsController');
     Route::get('delete-product/{id}','ProductsController@destroy');
     Route::get('delete-image/{id}','ProductsController@deleteImage');
     /// Product Attribute
     Route::resource('/product_attr','ProductAtrrController');
     Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');
     /// Product Images Gallery
     Route::resource('/image-gallery','ImagesController');
     Route::get('delete-imageGallery/{id}','ImagesController@destroy');

});
///
// ///Password Reset Routes
// Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\PasswordController@reset');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// FAQ


Route::get('/infoFAQ', function () {
    return view('frontEnd/FAQ/infoFAQ');
});

Route::get('/howtoshop', function () {
    return view('frontEnd/FAQ/howtoshop');
    // return view ::make('frontEnd.sidebar');
});

Route::get('/delivery', function () {
    return view('frontEnd/FAQ/delivery');
});

Route::get('/terms', function () {
    return view('frontEnd/FAQ/terms');
});

Route::get('/customercenter', function () {
    return view('visitor/customercenter');
});

Route::get('/return', function () {
    return view('frontEnd/FAQ/return');
});



/* Admin Location */
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', 'AdminController@index')->name('admin_home');
    /// Setting Area
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd','AdminController@chkPassword');
    Route::post('/update-pwd','AdminController@updatAdminPwd');
    /// Category Area
    Route::resource('/category','CategoryController');
    Route::get('delete-category/{id}','CategoryController@destroy');
    Route::get('/check_category_name','CategoryController@checkCateName');
    /// Products Area
    Route::resource('/product','ProductsController');
    Route::get('delete-product/{id}','ProductsController@destroy');
    Route::get('delete-image/{id}','ProductsController@deleteImage');
    /// Product Attribute
    Route::resource('/product_attr','ProductAtrrController');
    Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');
    /// Product Images Gallery
    Route::resource('/image-gallery','ImagesController');
    Route::get('delete-imageGallery/{id}','ImagesController@destroy');

    
   
    
///
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


