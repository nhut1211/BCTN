<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('khachhang.index');
});
Route::get('/information', 'HomeController@information');
Route::get('/index', 'HomeController@index');
Route::get('/dangky', 'HomeController@register');
Route::get('/dangnhap', 'HomeController@login');
Route::post('/login','HomeController@datalogin');
Route::get('/logout', 'HomeController@logout');
Route::post('/dangky-taikhoan', 'HomeController@dangky_taikhoan');

//khachhang
Route::get('/header', 'UserController@header_NQN');


//phong
Route::get('/them-phong', 'PhongController@them_phong');
Route::get('/qly-phong', 'PhongController@qly_phong');

Route::post('/add-phong', 'PhongController@add_phong');//them

Route::get('/xoa-phong/{xoa}','PhongController@xoa_phong'); //xoa

Route::get('/phong-trong/{trangthai}','PhongController@phong_trong');
Route::get('/phong-co-nguoi/{trangthai}','PhongController@phong_co_nguoi');

Route::get('/sua-phong/{id}','PhongController@sua_phong'); //sua
Route::post('/update-phong/{update}','PhongController@update_phong');

Route::get('/luu-tru-phong', 'PhongController@luu_tru_phong'); //luu tru

Route::get('/an-phong/{an}','PhongController@an_phong'); //an
Route::get('/khoi-phuc-phong/{hien}','PhongController@khoi_phuc_phong'); //hien

//dichvu
Route::get('/them-dich-vu', 'DichVuController@them_dich_vu');
Route::get('/qly-dich-vu', 'DichVuController@qly_dich_vu');

Route::post('/add-dich-vu', 'DichVuController@add_dich_vu');//them

Route::get('/xoa-dich-vu/{xoa}','DichVuController@xoa_dich_vu'); //xoa

Route::get('/sua-dich-vu/{id}','DichVuController@sua_dich_vu'); //sua
Route::post('/update-dich-vu/{update}','DichVuController@update_dich_vu');

//dien-nuoc
Route::get('/chi-so-dien', 'DienNuocController@chi_so_dien');
Route::get('/chi-so-nuoc', 'DienNuocController@chi_so_nuoc');

//Thongtin_User
Route::get('/thongtin-user', 'UserController@thongtin_user');

//Khachtro
Route::get('/them-khach-tro', 'KhachTroController@them_khach_tro');
Route::get('/qly-khach-tro', 'KhachTroController@qly_khach_tro');
Route::get('/qly-khach-tro-theo-phong/{so_phong}', 'KhachTroController@qly_khach_tro_theo_phong');


Route::post('/add-khach-tro', 'KhachTroController@add_khach_tro');//them

Route::get('/xoa-khach-tro/{xoa}','KhachTroController@xoa_khach_tro'); //xoa

Route::get('/sua-khach-tro/{id}','KhachTroController@sua_khach_tro'); //sua
Route::post('/update-khach-tro/{update}','KhachTroController@update_khach_tro');

Route::get('/luu-tru-khach-tro', 'KhachTroController@luu_tru_khach_tro'); //luu tru

Route::get('/an-khach-tro/{an}','KhachTroController@an_khach_tro'); //an
Route::get('/khoi-phuc-khach-tro/{hien}','KhachTroController@khoi_phuc_khach_tro'); //hien

//loaiPhong
Route::get('/them-loai-phong', 'LoaiPhongController@them_loai_phong');
Route::get('/qly-loai-phong', 'LoaiPhongController@qly_loai_phong');

Route::post('/add-loai-phong', 'LoaiPhongController@add_loai_phong');//them

Route::get('/xoa-loai-phong/{xoa}','LoaiPhongController@xoa_loai_phong'); //xoa

Route::get('/sua-loai-phong/{id}','LoaiPhongController@sua_loai_phong'); //sua
Route::post('/update-loai-phong/{update}','LoaiPhongController@update_loai_phong');

//khuvuc
Route::get('/qly-khu-vuc','PhongController@qly_khu_vuc');



//thongtincanhan

Route::get('/thongtin-canhan', 'UserController@thongtin_canhan');

//admin..............................................................................
Route::get('/admin','AdminController@admin');
Route::get('/layout','AdminController@Layout_Admin');
Route::post('/login-admin','AdminController@datalogin_admin');

//dangky-hopdong............................................
Route::post('/hop-dong','UserController@hop_dong');

//Quanly-hopdong*************************************************
Route::get('/qly-hop-dong','AdminController@qly_hop_dong');

//Quanly-hopdong*************************************************
Route::get('/qly-tai-khoan','AdminController@qly_tai_khoan');

