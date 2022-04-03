<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    //trangquanly
    public function admin()
    {
        return view('admin.dangnhap_admin');
    }
    //quanly-admin
    public function Layout_Admin()
    {
        return view('LayoutAdmin');
    }
    //dangnhap
    public function datalogin_admin(Request $request)
    {
        $taikhoan = $request->tai_khoan;
        $matkhau = $request->mat_khau;

        $result = DB::table('tbl_admin')->where('admin_taikhoan', $taikhoan)->where('admin_matkhau', $matkhau)->first();
        if($result){
            Session::put('admin_fullname',$result->admin_fullname);
            Session::put('id_admin',$result->id_admin);
            return Redirect::to('/layout');
        } else{
            Session::put('message','Đăng nhập thất bại rồi bạn ơi!!');
            return Redirect::to('/admin');
        }
    }
    
    //qly-hop-dong
    public function qly_hop_dong(){
        $hopdong = DB::table('tbl_hopdong')->get();
        $data = view('adminQuanLy.hopdong.qlyhopdong')->with('room',$hopdong);
        return view('LayoutAdmin')->with('adminQuanLy.hopdong.qlyhopdong',$data);
        
    }

    //qly-tai-khoan-kh
    public function qly_tai_khoan(){
        $hopdong = DB::table('tbl_loginuser')->get();
        $data = view('adminQuanLy.taikhoanKH.qlytaikhoanKH')->with('room',$hopdong);
        return view('LayoutAdmin')->with('adminQuanLy.taikhoanKH.qlytaikhoanKH',$data);       
    }
}
