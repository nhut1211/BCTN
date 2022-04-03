@extends('LayoutUser')
@section('content')
<div class="card">
    <div class="card-body">
    <!-- <h2 style="display:inline-block"><strong>Quản lý phòng</strong></h2>
    <div style="padding-bottom: 10px;">
            <a href="{{URL::to('/them-phong')}}" class="btn btn-success" name="addRoom" style="display: inline-block;"><i class="fa fa-plus"></i> Thêm phòng</a>
            <a class="btn btn-primary" name="editArea" style="display: inline-block;"><i class="fa fa-pencil"></i> Sửa nhà</a>
            <a class="btn btn-danger" name="deleteArea" style="display: inline-block;"><i class="fa fa-times"></i> Xóa nhà</a>
            <a href="{{URL::to('/luu-tru-phong')}}" class="btn btn-warning" name="deleteArea" style="display: inline-block;"><i class="fa fa-trash-o"></i> Lưu trữ</a>
        </div> -->
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="select2-container" id="s2id_statusPayment" style="width: 100%; "><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color:black; font-weight:600">Trạng thái</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a></div>
                            <select style="width:90%;height:28px;float:left; border: 1px solid; border-radius: 4px;" id="payType" tabindex="-1" class="select2-offscreen">
                                <option value="-1">Còn trống</option>
                                <option value="1">Đã thuê</option>
                            </select>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="select2-container" id="s2id_statusPayment" style="width: 100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color:black; font-weight:600">Chưa thu phí</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a></div>
                            <select style="width:90%;height:28px;float:left; border: 1px solid; border-radius: 4px;" id="payType" tabindex="-1" class="select2-offscreen">
                                    <option value="-1">Chưa thu phí</option>
                                    <option value="1">Đã thu phí</option>
                            </select>
                    </div>
                    <!-- <div class="col-md-2 col-sm-2 col-xs-12">
                        <input type="text" id="roomName" name="roomName" placeholder="Phòng" class="form-control">
                    </div> -->
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="select2-container" id="s2id_statusRoom" style="width: 100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color:black; font-weight:600"> Phòng</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a>
                            <input  style="width:90%;height:28px;float:left; border: 1px solid; border-radius: 4px;" class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1" tabindex="-1">
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-12" style="padding-top: 16px;">
                        <button  class="btn btn-primary" id="searchButton"><i class="fa fa-search"></i> Tìm kiếm</button>
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-left:15px; padding-bottom: 5px">
                    <a style="padding-right: 4px; border-right: 1px solid black; color:black" id="numberEmtyRoomMain">Còn trống 0</a>
                    <a style="padding-right: 4px; border-right: 1px solid black; color:black" id="numberRoomThueMain">Đã cho thuê 0</a>
                    <a style="color:black" id="numberRoomNotPaymentMain">Chưa thu phí 0</a>
                </div>
        <ul class="nav nav-tabs bar_tabs" role="tablist">
        @foreach($roam as $key => $value) 
            <li role="presentation" class="">
                <a href="{{URL::to('/qly-phong')}}" data-toggle="tab" >{{$value->ten_khu_vuc}}</a>
            </li>
        @endforeach
        </ul>
        @yield('contant')
    </div>
</div>
@endsection