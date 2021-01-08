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

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend
Route::get('/','FrontendController@index')->name('homepage');
Route:: get('checkout','FrontendController@checkout')->name('checkoutpage');
Route:: get('productdetail/{id}','FrontendController@productdetail')->name('productdetailpage');
Route:: get('mailus','FrontendController@mailus')->name('mailuspage');
Route:: get('product/{id}','FrontendController@product')->name('productpage');
Route:: get('shop','FrontendController@shop')->name('shoppage');
Route:: get('about','FrontendController@about')->name('aboutpage');
Route::resource('orders','OrderController');
Route:: get('orderconfirm','BackendController@orderconfirm')->name('orderconfirmpage');
Route:: get('orderhistory','BackendController@orderhistory')->name('orderhistorypage');
Route::resource('deliveries','DeliveryController');
Route::resource('information','InformationController');
Route:: get('delivered','BackendController@delivered')->name('deliveredpage');




//backend
Route::middleware('role:admin')->group(function(){
Route::get('dashboard','BackendController@dashboard')->name('dashboardpage');
Route::resource('categories','CategoryController');
Route::resource('products','ProductController');
Auth::routes();
});

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
