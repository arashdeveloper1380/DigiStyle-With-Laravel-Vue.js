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

Route::get('/', 'HomeController@create');

Route::group(['middleware'=>'AdminMiddle','prefix'=>'admin'],function(){


	Route::get('index','adminController@index')->middleware('AdminMiddle');
	Route::resource('category','categorycontroller');
	Route::post('delete','categorycontroller@destroy');
	Route::resource('category','categorycontroller');

	//product
	Route::get('product','productcontroller@index');
	Route::post('addproduct','productcontroller@addproduct');
	Route::post('productimage','productcontroller@image');
	Route::post('addsize','productcontroller@size');
	Route::post('addattribute','productcontroller@addattribute');
	Route::post('addattributeitem','productcontroller@addattributeitem');
	Route::post('addbrand','productcontroller@addbrand');
	Route::post('adddiscount','productcontroller@adddiscount');
	Route::post('addcategory','productcontroller@addcategory');
  Route::get('productshow','productcontroller@create');
  Route::post('deleteproduct','productcontroller@delete');
  Route::post('imageproduct','productcontroller@imageproduct');
  Route::post('Editproduct','productcontroller@Editproduct');

//delteimage

   Route::post('deleteimage','productcontroller@deleteimage');


//updateproduct
  Route::post('updateproduct','productcontroller@updateproduct');
  Route::post('updatesize','productcontroller@updatesize');
  Route::post('updateattributetype','productcontroller@updateattribute');
  Route::post('updatevalueattributeitem','productcontroller@updateattributeitem');
    Route::post('updatevaluebrand','productcontroller@updatevaluebrand');

	//attribute
    Route::post('attributegroup','atributecontroller@attributegroup');
    Route::post('attribute','atributecontroller@attribute');
    Route::post('attributeitem','atributecontroller@attributeitem');
    Route::post('size','atributecontroller@size');



    //brand

    Route::resource('brand','BrandController');
    Route::resource('savebrand','BrandController');
    Route::post('uploadimage','BrandController@uploadimage');
 	Route::resource('viewbrand','BrandController');
 	Route::post('deletebrand/{id}','BrandController@destroy');
//discount
 	Route::get('/discount', 'DiscountController@index');
  	Route::post('brandsave','DiscountController@store');
  	Route::get('/discountshow', 'DiscountController@show');
  	Route::post('discountdelete/{id}','DiscountController@delete');


  	//users
  	Route::get('/user', 'UserController@index');
    Route::post('adduser','UserController@store');
    Route::post('uloaduser','UserController@uloaduser');
    Route::get('/showuser', 'UserController@create');
    Route::get('/getusers', 'UserController@getusers');
    Route::post('approved','UserController@approved');
    Route::post('deleteuser/{id}','UserController@deleteuser');
    Route::post('updateuser/{id}','UserController@update');
    Route::post('updateuser','UserController@updateuser');


    Route::get('/slide', 'SliderController@uploadimage');
    Route::post('/addslide', 'SliderController@store');
    Route::post('/addslideimage', 'SliderController@upload');
    Route::post('/addbannerimage', 'SliderController@uploadbanner');
    Route::post('/addbanner', 'SliderController@create');
    Route::get('/commentshow', 'CommentController@show');
    Route::get('/comment', 'CommentController@fetch');
  Route::post('/approvedcomment', 'CommentController@approvedcomment');
Route::get('/report', 'ShopingController@report');
Route::get('/buy', 'ShopingController@buy');
  Route::post('/deletecomment', 'CommentController@deletecomment');
   Route::post('/updateorders', 'ShopingController@update');

Route::get('/getcomment', 'CommentController@getcomment');

  Route::get('/getorders', 'CommentController@getorders');
});




Auth::routes();

Route::get('/home/{id}', 'HomeController@index')->name('home');;
Route::get('/filter/{id}', 'HomeController@filter');
Route::get('/product', 'HomeController@product');
Route::get('/productitem', 'HomeController@productitem');
Route::post('/productimage', 'HomeController@productimage');
Route::get('/singleproduct/{id}/{id1}', 'HomeController@single');

Route::get('/auth/google', 'Auth\LoginController@redirectToGoggle');
Route::get('/auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::post('/addcomment', 'CommentController@store');
Route::post('/send', 'CommentController@send');
Route::post('/addcart', 'ShopingController@addcart');
Route::post('/deletecart', 'ShopingController@deletecart');
Route::post('/Addaddress', 'ShopingController@Addaddress');
Route::get('/check', 'HomeController@checklogin');

Route::get('/checkout1', 'HomeController@checkout1')->middleware('auth');
Route::get('/checkout2', 'HomeController@checkout2')->middleware('auth');
Route::get('/checkout3', 'HomeController@checkout3')->middleware('auth');

Route::post('/updatestatus', 'ShopingController@updatestatus');
Route::post('/deleteaddress', 'ShopingController@deleteaddress');


Route::post('/buyback', 'ShopingController@buyback');
Route::get('/orders/{id}', 'ShopingController@store');
Route::get('/user', 'HomeController@index')->middleware('UserMiddle');
Route::get('/updateprofile', 'HomeController@updateuser');

Route::post('/editprofile', 'UserPanelController@editprofile');
Route::get('/report', 'HomeController@OrderReport');
Route::get('/AddAddress', 'HomeController@AddAddress');
Route::get('/countorder', 'HomeController@countorder');
Route::get('/reportcomment', 'HomeController@reportcomment');
Route::post('/addlist', 'UserPanelController@addlist');
Route::get('/showlist', 'HomeController@showlist');
Route::post('/deletelist', 'UserPanelController@deletelist');
Route::post('/search', 'UserPanelController@search');




