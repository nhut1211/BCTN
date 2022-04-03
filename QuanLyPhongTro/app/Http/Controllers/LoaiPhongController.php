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
class LoaiPhongController extends Controller
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
    //loaiphong.............................................................................
    public function them_loai_phong(){
        $this->AuthLogin();
        $this->AuthHopDong();
        return View('khquanly.loaiphong.themloaiphong');
    }
    public function add_loai_phong(Request $request)
    {
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['stt'] = $request->stt;
        $data['loai_phong'] = $request->loai_phong;
        $data['gia_phong'] = $request->gia_phong;
        $data['mo_ta'] = $request->mo_ta;

        DB::table('tbl_loaiphong')->insert($data);
        //Session::put('message','Đăng ký thành công');
        return Redirect::to('/them-loai-phong');
    }
    public function qly_loai_phong(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $phong = DB::table('tbl_loaiphong')->get();
        $data = view('khquanly.loaiphong.qlyloaiphong')->with('room',$phong);
        return view('LayoutUser')->with('khquanly.loaiphong.qlyloaiphong',$data);
        //return View('khquanly.qlyphong');
    }
    public function sua_loai_phong($id){
        $this->AuthLogin();
        $this->AuthHopDong();
        $edit = DB::table('tbl_loaiphong')->where('id_loaiphong', $id)->get();
        $manager = view('khquanly.loaiphong.sualoaiphong')->with('edit_loaiphong', $edit);
        return view('LayoutUser')->with('khquanly.loaiphong.sualoaiphong', $manager);
    }

    public function update_loai_phong(Request $request, $update){
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['stt'] = $request->stt;
        $data['loai_phong'] = $request->loai_phong;
        $data['gia_phong'] = $request->gia_phong;
        $data['mo_ta'] = $request->mo_ta;

        DB::table('tbl_loaiphong')->where('id_loaiphong', $update)->update($data);
        //Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('qly-loai-phong');
    }

    public function xoa_loai_phong($xoa){
        $this->AuthLogin();
        $this->AuthHopDong();
        DB::table('tbl_loaiphong')->where('id_loaiphong', $xoa)->delete();
        //Session::put('message','');
        return Redirect::to('qly-loai-phong');
    }

//thongtincanhan.........................................................................................................
    public function thongtin_canhan()
    {
        return View('khquanly.thongtinUser.thongtincanhan');
    }

    // public function update_loai_phong(Request $request, $update){
    //     //$this->AuthLogin();
    //     $data = array();
    //     $data['stt'] = $request->stt;
    //     $data['loai_phong'] = $request->loai_phong;
    //     $data['gia_phong'] = $request->gia_phong;
    //     $data['mo_ta'] = $request->mo_ta;

    //     DB::table('tbl_loaiphong')->where('id_loaiphong', $update)->update($data);
    //     //Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
    //     return Redirect::to('qly-loai-phong');
    // }
}
