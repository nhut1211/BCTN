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
class UserController extends Controller
{
    public function header_NQN()
    {
        return View('khquanly.headerNQN');
    }
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

//User..............................................................................
    public function thongtin_user()
    {
        return View('khquanly.thongtinUser.thongtindangnhap');
    }
    public function sua_thongtin_dangnhap($id){
        $this->AuthLogin();
        $this->AuthHopDong();
        $edit = DB::table('tbl_loginuser')->where('user_id', $id)->get();
        $manager = view('khquanly.thongtinUser.thongtindangnhap')->with('edit_thongtin', $edit);
        return view('LayoutUser')->with('khquanly.thongtinUser.thongtindangnhap', $manager);
    }
    public function update_thongtin_dangnhap(Request $request, $update){
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['user_fullname'] = $request->ho_ten;
        $data['user_password'] = $request->mat_khau;
        $data['user_email'] = $request->e_mail;
        $data['user_phone'] = $request->so_dien_thoai;
        DB::table('tbl_loginuser')->where('user_id', $update)->update($data);
        //Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('qly-phong');
    }

//hopdong.....................................................................................................................
    public function hop_dong(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $hopdong= new HopDong();
        $hopdong->ho_ten=$data['ho_ten'];
        $hopdong->nam_sinh=$data['nam_sinh'];
        $hopdong->dia_chi=$data['dia_chi'];
        $hopdong->so_dien_thoai=$data['so_dien_thoai'];
        $hopdong->e_mail=$data['e_mail'];
        $hopdong->user_id=Session::get('user_id');

        $hopdong->save();
        $dieukhien=$hopdong->id_hopdong;
        Session::put('id_hopdong',$dieukhien);
        return Redirect::to('/qly-phong');
    }
}


