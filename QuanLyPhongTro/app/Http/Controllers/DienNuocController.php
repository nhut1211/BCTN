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
class DienNuocController extends Controller
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
    //dien_nuoc..............................................................................................
    public function chi_so_dien(){
        $this->AuthLogin();
        $this->AuthHopDong();
        return View('khquanly.dichvu.loaidichvu.dien');
    }

    public function chi_so_nuoc(){
        $this->AuthLogin();
        $this->AuthHopDong();
        return View('khquanly.dichvu.loaidichvu.nuoc');
    }
}
