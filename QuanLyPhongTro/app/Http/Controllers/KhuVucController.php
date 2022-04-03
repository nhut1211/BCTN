<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\HopDong;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Redirect;
session_start();
class KhuVucController extends Controller
{
    //kiemtradangnhap
    public function AuthLogin(){
        $id_user = Session::get('user_id');
        if($id_user){
            return Redirect::to('/header');
        }else{
            return Redirect::to('/dangnhap')->send();
        }
    }
    //kiemtrahopdong
    public function AuthHopDong(){

        $user_id = Session::get('user_id');
        $hopdong_id = HopDong::where('user_id', $user_id)->first();

        if($hopdong_id){
            return Redirect::to('/thongtin-canhan');
        }else{
            return Redirect::to('/header')->send();
        }
    }
    //khuvuc..............................................
    // public function qly_khu_vuc(){
    //     $this->AuthLogin();
    //     $this->AuthHopDong();
    //     $khuvuc = DB::table('tbl_khuvuc')->get();
    //     //$data = view('khquanly.khuvuc.qlykhuvuc')->with('roam',$khuvuc);
    //     return view('khquanly.phong.qlyphong')->with('roam',$khuvuc);
    //     //return View('khquanly.qlyphong');
    // }
}
