@extends('LayoutAdmin')
@section('content')
<div class="card" style="margin-bottom: 0px;">
    <div class="card-body">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Danh sách tài khoản khách hàng</h4>
                </div>
            </div>
        </div>

        <div class="container-fluid">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Họ tên</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($room as $key => $value)
                    <tr>
                        <td>{{$value->user_fullname}}</td>
                        <td>{{$value->user_password}}</td>
                        <td>{{$value->user_email}}</td>
                        <td>{{$value->user_phone}}</td>
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