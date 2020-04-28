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

Route::get('/', function () {
    return view('welcome');
});
//Dang nhap
Route::get('/dang-nhap','LoginController@login');
Route::post('/xuly','LoginController@xuly');
Route::get('/dashboard','LoginController@dashboard');

// Loai ruou
Route::get('/loai-ruou','LoaiController@loai_ruou');
Route::get('/them-loai-ruou','LoaiController@them_loai_ruou');
Route::get('/sua-loai-ruou/{catalog_id}','LoaiController@sua_loai_ruou');
Route::post('/add-catalog','LoaiController@add_catalog');
Route::post('/edit-catalog/{catalog_id}','LoaiController@edit_catalog');
Route::get('/xoa-loai-ruou/{catalog_id}','LoaiController@xoa_loai_ruou');

// Nha san xuat
Route::get('/producer','ProducerController@producer');
Route::get('/them-producer','ProducerController@them_producer');
Route::get('/sua-producer/{producer_id}','ProducerController@sua_producer');
Route::post('/add-producer','ProducerController@add_producer');
Route::post('/edit-producer/{producer_id}','ProducerController@edit_producer');
Route::get('/xoa-producer/{producer_id}','ProducerController@xoa_producer');

//Ruou
Route::get('/booze','BoozeController@booze');
Route::get('/them-booze','BoozeController@them_booze');
Route::get('/sua-booze/{booze_id}','BoozeController@sua_booze');
Route::post('/add-booze','BoozeController@add_booze');
Route::post('/edit-booze/{booze_id}','BoozeController@edit_booze');
Route::get('/xoa-booze/{booze_id}','BoozeController@xoa_booze');

//trang chu
Route::get('/home','HomeController@home');
Route::post('/timkiem','HomeController@timkiem');
Route::post('/binhluan','HomeController@binhluan');
Route::get('/theo-catalog/{catalog_id}','HomeController@theo_catalog');
Route::get('/theo-producer/{producer_id}','HomeController@theo_producer');
Route::get('/details/{booze_id}','HomeController@details');


// cart
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-C','CartController@show_C');
Route::get('/xoa-cart/{rowId}','CartController@xoa_cart');


//new cart ajax
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/new-cart-ajax','CartController@new_cart_ajax');
Route::get('/xoa-cart-ajax/{session_id}','CartController@xoa_cart_ajax');




// checkout
Route::get('/dang-ky','CheckController@dang_ky');
Route::get('/dang-nhap2','CheckController@dang_nhap');
Route::post('/xuly2','CheckController@xuly2');
Route::get('/dang-xuat2','CheckController@dang_xuat');
Route::post('/them-kh','CheckController@them_kh');
Route::post('/info','CheckController@info');
Route::get('/thanhtoan','CheckController@thanhtoan');
Route::get('/info-details','CheckController@info_details');

// manage 

Route::get('/manage','CheckController@manage');
Route::post('/status','CheckController@status');
Route::get('/chitiethoadon/{ct_id}','CheckController@chitiethoadon');
