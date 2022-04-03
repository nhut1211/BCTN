@extends('LayoutUser')
@section('content')      
<div class="card">
    @foreach($edit_phong as $key => $value)
    <form class="form-horizontal" action="{{URL::to('/update-phong/'.$value->id_phong)}}" method="post">
        {{ csrf_field() }}             
        <div class="card-body">
            <h2 class="card-title text-center row1">THÔNG TIN PHÒNG</h2>
            <div class="form-group row row2">
                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Số phòng:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="{{$value->so_phong}}"  id="lname" name="so_phong" placeholder="Last Name Here">
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