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

// Route::get('/', function () {
//     return view('welcome');
// });
/*login*/
Route::group(['prefix'=>'login','middleware'=>'CheckLogin'],function(){
Route::get('/','LoginController@getLogin');
Route::post('/','LoginController@postLogin');
});
/*backend*/
Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
Route::get('','AdminController@getIndex');
Route::get('list','AdminController@getAdmin');
Route::get('addlist','AdminController@getAddAdmin');
Route::post('addlist','AdminController@postAddAdmin');
Route::get('editlist/{id}','AdminController@getEditAdmin');
Route::post('editlist/{id}','AdminController@postEditAdmin');
Route::get('delete/{id}','AdminController@getDelete');
Route::get('listcate','AdminController@getListCate');
Route::get('addcate','AdminController@getAddCate');
Route::get('listcatechild','AdminController@getListCateChild');
Route::get('addcatechild','AdminController@getAddCateChild');
Route::get('listproduct','AdminController@getListPro');
Route::get('addproduct','AdminController@getAddPro');
Route::get('detail','AdminController@getDetailPro');
Route::get('addcolor','AdminController@getAddColor');
Route::get('order','AdminController@getOrder');
Route::get('detailorder','AdminController@getDetailOrder');
Route::get('comment','CommentController@getComment');


});
/*end backend*/

Route::get('logout','AdminController@logOut');


/*frontend*/
Route::get('/','PageController@getIndex');

Route::get('sanpham','PageController@getSanPham');

Route::get('chitietsanpham','PageController@getChiTietSanPham');

Route::get('timkiem','PageController@getTimKiem');

Route::get('giohang','PageController@getCart');

Route::get('dathang','PageController@getDatHang');

Route::get('khuyenmai','PageController@getKhuyenMai');

Route::get('khuyenmai2','PageController@getKhuyenMai2');

Route::get('chitietsanpham2','PageController@getChiTietSanPham2');
/* end frontend*/