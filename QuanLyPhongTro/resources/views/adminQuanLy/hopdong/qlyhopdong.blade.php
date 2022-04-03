@extends('LayoutAdmin')
@section('content')
<div class="card" style="margin-bottom: 0px;">
    <div class="card-body">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Danh sách hợp đồng</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Năm sinh</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($room as $key => $value)
                    <tr>
                        <td>{{$value->ho_ten}}</td>
                        <td>{{$value->nam_sinh}}</td>
                        <td>{{$value->dia_chi}}</td>
                        <td>{{$value->so_dien_thoai}}</td>
                        <td>{{$value->e_mail}}</td>
                        <td>
                            <a href="" class="active delete" onclick="return confirm('Chắc chưa???')" ui-toggle-class="">
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