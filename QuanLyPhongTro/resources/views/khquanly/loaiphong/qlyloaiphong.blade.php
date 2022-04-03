@extends('LayoutUser')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="x_title">
            <h2 style="display:inline-block"><strong>Quản lý loại phòng</strong></h2>
            <div style="padding-bottom: 5px">
                <a href="{{URL::to('/them-loai-phong')}}" class="btn btn-success" name="addRoom" style="display: inline-block;"><i class="fa fa-plus"></i> Thêm</a>
                <a class="btn btn-primary" name="editArea" style="display: inline-block;"><i class="fa fa-pencil"></i> Sửa</a>
                <a class="btn btn-danger" name="deleteArea" style="display: inline-block;"><i class="fa fa-times"></i> Xóa</a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Loại phòng</th>
                        <th>Giá phòng</th>
                        <th>Mô tả</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($room as $key => $value)
                    <tr>
                        <td>{{$value->stt}}</td>
                        <td>{{$value->loai_phong}}</td>
                        <td>{{$value->gia_phong}}</td>
                        <td>{{$value->mo_ta}}</td>
                        <td>
                            <a href="{{URL::to('/sua-loai-phong/'.$value->id_loaiphong)}}" class="active edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active" title="Sửa"></i>
                            </a>
                            <a href="{{URL::to('/xoa-loai-phong/'.$value->id_loaiphong)}}" class="active delete" onclick="return confirm('Chắc chưa???')" ui-toggle-class="">
                                <i class="fa fa-times text-danger text" title="Xóa"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection