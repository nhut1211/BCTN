@extends('LayoutUser')
@section('content')
<div class="card">
    <div class="card-body">
    <h2 style="display:inline-block"><strong>Lưu trữ phòng</strong></h2>
    <div style="padding-bottom: 10px;">
            <a href="{{URL::to('/qly-phong')}}" class="btn btn-success" name="addRoom" style="display: inline-block;"><i class="fa fa-reply"></i> Quay lại</a>
            <!-- <a class="btn btn-primary" name="editArea" style="display: inline-block;"><i class="fa fa-pencil"></i> Sửa nhà</a>
            <a class="btn btn-danger" name="deleteArea" style="display: inline-block;"><i class="fa fa-close"></i> Xóa nhà</a> -->
        </div>
        <div class="table-responsive">  
        @foreach($room as $key => $value) 
            <div class="thumbnail" style="height:100%; width: 245px; padding-left: 10px; padding-right: 10px;background-color: rgb(133, 193, 233)">
                <div style="padding: 10px 10px;float:left;width: 60%;">
                    <div class="row" style="font-size: 15px">
                        <strong>
                            <i class="fa fa-home" aria-hidden="true"></i> 
                            <span>{{$value->so_phong}}</span>
                        </strong>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="row" style="padding: 10px 5px">
                    <button class="btn btn-success" style="font-size: 10px; display: inline-block;" name="paymentRoom" title="Trả">
                        <i class="fa fa-undo"></i>
                    </button>
                <button class="btn btn-warning" style="font-size: 10px; display: inline-block;" name="changeRoom" title="Thêm">
                    <i class="fa fa-plus"></i>
                </button>
                <button class="btn btn-dark" style="font-size:10px" name="watchCustomer" title="Xem">
                    <i class="fa fa-eye"></i>
                </button>
                <button class="btn btn-info" style="font-size: 10px; display: inline-block;" name="editCustomer" title="Thanh toán">
                    <i class="fa fa-edit"></i>
                </button></div>
                <div class="row" style="padding: 10px 10px">
                    <p>
                        <i class="fa fa-user"></i> 
                        <span style="color:green;font-size:11px">{{$value->loai_phong}}</span>
                    </p>
                    <p>
                        <i class="fa fa-money"></i>
                        <span style="color:red;font-size:11px">{{$value->gia_phong}}</span>
                    </p>
                </div>
                <div class="row" style="padding: 10px 10px">
                    <a href="{{URL::to('/khoi-phuc-phong/'.$value->id_phong)}}" class="btn btn-primary" style="font-size: 10px; display: inline-block;" name="editRoom"><i class="fa fa-level-up"></i> Khôi phục</a>
                    <a href="{{URL::to('/xoa-phong/'.$value->id_phong)}}" class="btn btn-danger" onclick="return confirm('Chắc chưa???')" style="font-size: 10px; display: inline-block;" name="deleteRoom"><i class="fa fa-times"></i> Xóa</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection