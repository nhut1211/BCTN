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
class DichVuController extends Controller
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
    //Dichvu..............................................................................................
    public function them_dich_vu(){
        $this->AuthLogin();
        $this->AuthHopDong();
        return View('khquanly.dichvu.themdichvu');
    }
    public function add_dich_vu(Request $request)
    {
        $this->AuthLogin(); 
        $this->AuthHopDong();
        $data = array();
        $data['ten_dichvu'] = $request->ten_dichvu;
        $data['gia'] = $request->gia;
        $data['trang_thai'] = $request->trang_thai;
        $data['mo_ta'] = $request->mo_ta;

        DB::table('tbl_dichvu')->insert($data);
        //Session::put('message','Đăng ký thành công');
        return Redirect::to('/them-dich-vu');
    }
    public function qly_dich_vu(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $dichvu = DB::table('tbl_dichvu')->get();
        $data = view('khquanly.dichvu.qlydichvu')->with('room',$dichvu);
        return view('LayoutUser')->with('khquanly.dichvu.qlydichvu',$data);
    }
    public function xoa_dich_vu($xoa){
        $this->AuthLogin();
        $this->AuthHopDong();
        DB::table('tbl_dichvu')->where('id_dichvu', $xoa)->delete();
        //Session::put('message','');
        return Redirect::to('/qly-dich-vu');
    }
    public function sua_dich_vu($id){
        $this->AuthLogin();
        $this->AuthHopDong();
        $edit = DB::table('tbl_dichvu')->where('id_dichvu', $id)->get();
        $manager = view('khquanly.dichvu.suadichvu')->with('edit_dichvu', $edit);
        return view('LayoutUser')->with('khquanly.dichvu.suadichvu', $manager);
    }

    public function update_dich_vu(Request $request, $update){
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['ten_dichvu'] = $request->ten_dichvu;
        $data['gia'] = $request->gia;
        $data['trang_thai'] = $request->trang_thai;
        $data['mo_ta'] = $request->mo_ta;

        DB::table('tbl_dichvu')->where('id_dichvu', $update)->update($data);
        //Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('qly-dich-vu');
    }
}
