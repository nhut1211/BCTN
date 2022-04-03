@extends('LayoutUser')
@section('content')      
<div class="card">
    @foreach($edit_loaiphong as $key => $value)
    <form class="form-horizontal" action="{{URL::to('/update-loai-phong/'.$value->id_loaiphong)}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center row1">THÔNG TIN LOẠI PHÒNG</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Stt:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->stt}}" id="lname" name="stt">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Loại phòng:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->loai_phong}}" id="lname" name="loai_phong">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Giá phòng:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->gia_phong}}" id="lname" name="gia_phong">
                </div>
            </div>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mô tả:</label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control" id="lname" name="mo_ta">{{$value->mo_ta}}</textarea>
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