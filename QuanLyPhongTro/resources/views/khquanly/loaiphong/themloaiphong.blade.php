@extends('LayoutUser')
@section('content')      
<div class="card">
    <form class="form-horizontal" action="{{URL::to('/add-loai-phong')}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center row1">THÔNG TIN PHÒNG</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Stt:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="stt" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Loại phòng:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="loai_phong" placeholder="Password Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Giá phòng:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="lname" name="gia_phong" placeholder="Password Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mô tả:</label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control" id="lname" name="mo_ta" placeholder="Password Here"></textarea>
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