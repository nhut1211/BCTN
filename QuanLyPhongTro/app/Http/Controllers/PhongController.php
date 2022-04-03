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
class PhongController extends Controller
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
    //Phong.............................................................................
    public function them_phong(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $loai = DB::table('tbl_loaiphong')->orderBy('id_loaiphong','desc')->get();
        return View('khquanly.phong.themphong')->with('loai_phong',$loai);
    }
    public function qly_phong(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $phong = DB::table('tbl_phong')->join('tbl_loaiphong','tbl_loaiphong.loai_phong','=','tbl_phong.loai_phong')
        ->join('tbl_khuvuc','tbl_khuvuc.ten_khu_vuc','=','tbl_phong.khu_vuc')
        ->orderBy('so_phong','asc')->where('luu_tru','1')->get();
        $khuvuc = DB::table('tbl_khuvuc')->orderBy('id_khuvuc','asc')->get();
        $data = view('khquanly.phong.qlyphong')->with('room',$phong)->with('roam',$khuvuc);
        return view('LayoutUser')->with('khquanly.phong.qlyphong',$data);
    }
    public function qly_khu_vuc(){
        $this->AuthLogin();
        $this->AuthHopDong();
        
    //     return view('khquanly.phong.qlyphong')->with('roam',$khuvuc);
    }
    public function add_phong(Request $request)
    {
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['so_phong'] = $request->so_phong;
        $data['loai_phong'] = $request->loai_phong;
        $data['trang_thai'] = $request->trang_thai;
        $data['luu_tru'] = 1;
        DB::table('tbl_phong')->insert($data);
        //Session::put('message','Đăng ký thành công');
        return Redirect::to('/qly-phong');
    }
    // public function phong_trong($trangthai){
    //     $this->AuthLogin();
    //     $this->AuthHopDong();
    //     DB::table('tbl_phong')->where('id_phong', $trangthai)->update(['trang_thai'=>1]);
    //     //Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
    //     return Redirect::to('/qly-phong');
    // }

    // public function phong_co_nguoi($trangthai){
    //     $this->AuthLogin();
    //     $this->AuthHopDong();
    //     DB::table('tbl_phong')->where('id_phong', $trangthai)->update(['trang_thai'=>0]);
    //     //Session::put('message','Bỏ kích hoạt thương hiệu sản phẩm thành công');
    //     return Redirect::to('qly-phong');
    // }

    public function sua_phong($id){
        $this->AuthLogin();
        $this->AuthHopDong();
        $edit = DB::table('tbl_phong')->where('id_phong', $id)->get();
        $loai = DB::table('tbl_loaiphong')->orderBy('id_loaiphong','desc')->get();
        $manager = view('khquanly.phong.suaphong')->with('edit_phong', $edit)->with('loai_phong', $loai);
        return view('LayoutUser')->with('khquanly.phong.suaphong', $manager);
    }

    public function update_phong(Request $request, $update){
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['so_phong'] = $request->so_phong;
        $data['loai_phong'] = $request->loai_phong;

        DB::table('tbl_phong')->where('id_phong', $update)->update($data);
        //Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('qly-phong');
    }

    public function xoa_phong($xoa){
        $this->AuthLogin();
        $this->AuthHopDong();
        DB::table('tbl_phong')->where('id_phong', $xoa)->delete();
        //Session::put('message','');
        return Redirect::to('/luu-tru-phong');
    }

    public function luu_tru_phong(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $phong = DB::table('tbl_phong')->join('tbl_loaiphong','tbl_loaiphong.loai_phong','=','tbl_phong.loai_phong')
        ->orderBy('so_phong','asc')->where('luu_tru','0')->get();
        $data = view('khquanly.phong.phong-xoa')->with('room',$phong);
        return view('LayoutUser')->with('khquanly.phong.phong-xoa',$data);
    }

    public function an_phong($an)
    {
        DB::table('tbl_phong')->where('id_phong',$an)->update(['luu_tru'=>0]);
        Session::put('message','Xóa thành công');
        return Redirect::to('/qly-phong');
    }

    public function khoi_phuc_phong($hien)
    {
        DB::table('tbl_phong')->where('id_phong',$hien)->update(['luu_tru'=>1]);
        Session::put('message','khôi phục thành công');
        return Redirect::to('/luu-tru-phong');
    }
}



