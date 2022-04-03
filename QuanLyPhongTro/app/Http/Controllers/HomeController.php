<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index()
    {
        return View('khachhang.index');
    }
    public function information()
    {
        return View('khachhang.information');
    }
    public function register()
    {
        return View('khachhang.dangky');
    }
    public function login()
    {
        return View('khachhang.dangnhap');
    }
    public function datalogin(Request $request)
    {
        $user_email = $request->email;
        $user_password = $request->password;

        $result = DB::table('tbl_loginuser')->where('user_email', $user_email)->where('user_password', $user_password)->first();
        if($result){
            Session::put('user_fullname',$result->user_fullname);
            Session::put('user_id',$result->user_id);
            return Redirect::to('/header');
        } else{
            Session::put('message','Đăng nhập thất bại rồi bạn ơi!!');
            return Redirect::to('/dangnhap');
        }
    }
    public function logout(Request $request)
    {
        Session::flush();
        //Session::put('user_fullname', null);
        //Session::put('user_id', null);
        return Redirect::to('/index');
    }
    public function dangky_taikhoan(Request $request)
    {
        $this->validate($request,[
            'ho_ten'=>'required',
            'dien_thoai'=>'required|digits:10',
            'e_mail'=>'required|email:rfc,dns|unique:tbl_loginuser,user_email',
            'mat_khau'=>'required|min:6',
            'nhaplai_matkhau'=>'required|same:mat_khau'
        ],[
            'ho_ten.required'=>'Bạn chưa nhập họ tên.',
            'dien_thoai.required'=>'Bạn chưa nhập số điện thoại.',
            'dien_thoai.digits'=>'Số điện thoại bạn nhập phải đủ và không quá 10 số',
            'e_mail.required'=>'Bạn chưa nhập Email.',
            'e_mail.email'=>'Email phải theo định dạng, ví dụ: abc@...',
            'e_mail.unique'=>'Email của bạn đã được đăng ký trước đó, mời bạn nhập email khác',
            'mat_khau.required'=>'Bạn chưa nhập mật khẩu.',
            'nhaplai_matkhau.required'=>'Bạn chưa nhập lại mật khẩu.'
        ]);
        $data = array();
        $data['user_fullname'] = $request->ho_ten;
        $data['user_phone'] = $request->dien_thoai;
        $data['user_email'] = $request->e_mail;
        $data['user_password'] = $request->mat_khau;
        

        DB::table('tbl_loginuser')->insert($data);
        Session::put('message','Đăng ký thành công');
        return Redirect::to('/dangnhap');
    }
}

