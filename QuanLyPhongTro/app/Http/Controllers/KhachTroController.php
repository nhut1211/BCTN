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
class KhachTroController extends Controller
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
    //Khachtro..............................................................................................
    public function them_khach_tro(){
        $this->AuthLogin();
        $this->AuthHopDong();
        return View('khquanly.khachtro.themkhachtro');
    }
    public function qly_khach_tro(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $khachtro = DB::table('tbl_khachtro')->where('luu_tru','1')->get();
        $data = view('khquanly.khachtro.qlykhachtro')->with('room',$khachtro);
        return view('LayoutUser')->with('khquanly.khachtro.qlykhachtro',$data);
    }
    public function qly_khach_tro_theo_phong($so_phong){
        $this->AuthLogin();
        $this->AuthHopDong();
        $khachtro = DB::table('tbl_khachtro')->join('tbl_phong','tbl_phong.so_phong','=','tbl_khachtro.so_phong')
            ->where('tbl_khachtro.so_phong',$so_phong)->where('tbl_khachtro.luu_tru','1')->get();
        $data = view('khquanly.khachtro.qlykhachtro')->with('room',$khachtro);
        return view('LayoutUser')->with('khquanly.khachtro.qlykhachtro',$data);
    }
    public function add_khach_tro(Request $request)
    {
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['so_phong'] = $request->so_phong;
        $data['ho_dem'] = $request->ho_dem;
        $data['ten_khachtro'] = $request->ten_khachtro;
        $data['so_cmnd'] = $request->so_cmnd;
        $data['so_phone'] = $request->so_phone;
        $data['que_quan'] = $request->que_quan;
        $data['ho_khau'] = $request->ho_khau;

        DB::table('tbl_khachtro')->insert($data);
        //Session::put('message','Đăng ký thành công');
        return Redirect::to('/them-khach-tro');
    }
    public function xoa_khach_tro($xoa){
        $this->AuthLogin();
        $this->AuthHopDong();
        DB::table('tbl_khachtro')->where('id_khachtro', $xoa)->delete();
        //Session::put('message','');
        return Redirect::to('/qly-khach-tro');
    }
    public function sua_khach_tro($id){
        $this->AuthLogin();
        $this->AuthHopDong();
        $edit = DB::table('tbl_khachtro')->where('id_khachtro', $id)->get();
        $manager = view('khquanly.khachtro.suakhachtro')->with('edit_khachtro', $edit);
        return view('LayoutUser')->with('khquanly.khachtro.suakhachtro', $manager);
    }

    public function update_khach_tro(Request $request, $update){
        $this->AuthLogin();
        $this->AuthHopDong();
        $data = array();
        $data['so_phong'] = $request->so_phong;
        $data['ho_dem'] = $request->ho_dem;
        $data['ten_khachtro'] = $request->ten_khachtro;
        $data['so_cmnd'] = $request->so_cmnd;
        $data['so_phone'] = $request->so_phone;
        $data['que_quan'] = $request->que_quan;
        $data['ho_khau'] = $request->ho_khau;

        DB::table('tbl_khachtro')->where('id_khachtro', $update)->update($data);
        //Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
        return Redirect::to('qly-khach-tro');
    }

    public function luu_tru_khach_tro(){
        $this->AuthLogin();
        $this->AuthHopDong();
        $khachtro = DB::table('tbl_khachtro')->where('luu_tru','0')->get();
        $data = view('khquanly.khachtro.khachtro-xoa')->with('room',$khachtro);
        return view('LayoutUser')->with('khquanly.khachtro.khachtro-xoa',$data);
    }

    public function an_khach_tro($an)
    {
        DB::table('tbl_khachtro')->where('id_khachtro',$an)->update(['luu_tru'=>0]);
        Session::put('message','Xóa thành công');
        return Redirect::to('/qly-khach-tro');
    }

    public function khoi_phuc_khach_tro($hien)
    {
        DB::table('tbl_khachtro')->where('id_khachtro',$hien)->update(['luu_tru'=>1]);
        Session::put('message','khôi phục thành công');
        return Redirect::to('/luu-tru-khach-tro');
    }
}
