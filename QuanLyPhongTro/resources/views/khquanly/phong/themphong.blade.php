@extends('LayoutUser')
@section('content')      
<div class="card">
    <form class="form-horizontal" action="{{URL::to('/add-phong')}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center row1">THÔNG TIN PHÒNG</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Phòng:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  id="lname" name="so_phong" placeholder="Last Name Here">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Loại phòng:</label>
                <div class="col-sm-9">
                    <select class="select2 form-control custom-select" name="loai_phong" style="width: 100%; height:36px; padding-left: 6px;">
                        @foreach($loai_phong as $key => $value)
                        <option value="{{$value->loai_phong}}">{{$value->loai_phong}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row row2">
                <label for="email1" class="col-sm-2 text-right control-label col-form-label">Trạng thái:</label>
                <div class="col-sm-9">
                    <select class="select2 form-control custom-select" name="trang_thai" style="width: 100%; height:36px; padding-left: 6px;">
                            <option value="0">Trống</option>
                            <option value="1">Có người ở</option>
                    </select>
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