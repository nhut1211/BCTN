@extends('LayoutUser')
@section('content')      
<div class="card">
    @foreach($edit_khachtro as $key => $value)
    <form class="form-horizontal" action="{{URL::to('/update-khach-tro/'.$value->id_khachtro)}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center">SỬA THÔNG TIN KHÁCH TRỌ</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Phòng</label>
                <div class="col-sm-9">
                    <input type="text" readonly class="form-control" value="{{$value->so_phong}}"  id="lname" name="so_phong" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Họ đệm</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->ho_dem}}"  id="lname" name="ho_dem" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Tên</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->ten_khachtro}}"  id="lname" name="ten_khachtro" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Số CMND</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->so_cmnd}}"  id="lname" name="so_cmnd" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Số điện thoại</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->so_phone}}"  id="lname" name="so_phone" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Quê Quán</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->que_quan}}"  id="lname" name="que_quan" placeholder="Password Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Hộ khẩu thường trú</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->ho_khau}}"  id="lname" name="ho_khau" placeholder="Password Here">
                </div>
            </div>
        </div>
        <div class="border-top text-center row2">
            <div class="card-body">
                <button type="submit" name="them" class="btn btn-primary">Sửa</button>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection