@extends('LayoutUser')
@section('content')      
<div class="card">
    <form class="form-horizontal" action="{{URL::to('/add-dich-vu')}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center row1">THÊM DỊCH VỤ</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Trạng thái</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="trang_thai">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Tên dịch vụ:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="ten_dichvu" >
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Giá:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="gia" >
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mô tả:</label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control" id="lname" name="mo_ta" ></textarea>
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