@extends('LayoutUser')
@section('content')      
<div class="card">
    <form class="form-horizontal" action="{{URL::to('/add-khach-tro')}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center">THÔNG TIN KHÁCH TRỌ</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Phòng</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="so_phong" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Họ đệm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="ho_dem" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Tên</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="ten_khachtro" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Số CMND</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="so_cmnd" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Số điện thoại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="so_phone" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Quê Quán</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="que_quan" placeholder="Password Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Hộ khẩu thường trú</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="ho_khau" placeholder="Password Here">
                </div>
            </div>
        </div>
        <div class="border-top text-center row2">
            <div class="card-body">
                <button type="submit" name="them" class="btn btn-primary">Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection