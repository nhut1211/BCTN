@extends('LayoutUser')
@section('content')
<div class="card">
    <form class="form-horizontal" action="{{URL::to('/add-phong')}}" method="post">
        {{ csrf_field() }}  
        <div class="card-body">           
                <h2>Đổi mật khẩu</h2>
                <div class="form-group row row2">
                    <label for="txtHo">Mật Khẩu hiện tại</label>
                    <input type="text" class="form-control" id="txtHoTen" name="ho_ten">
                </div>
                <div class="form-group row2">
                    <label for="txtGioiTinh">Mật khẩu mới</label>
                    <input type="text" class="form-control" id="txtMatKhau" name="mat_khau">
                </div>
                <div class="form-group row2">
                    <label for="txtGioiTinh">Nhập lại mật khẩu mới</label>
                    <input type="text" class="form-control" id="txtEmail" name="e_mail">
                </div>
                <div class="form-group row2">
                    <label for="txtNganh">Email</label>
                    <input type="text" class="form-control" id="txtPhone" name="so_dien_thoai">
                </div>
                <div class="border-top text-center row2">
                    <div class="card-body">
                        <button type="submit" name="them" class="btn btn-primary">Lưu</button>
                    </div>
            </div>
        </div>
    </form>
</div>     
@endsection