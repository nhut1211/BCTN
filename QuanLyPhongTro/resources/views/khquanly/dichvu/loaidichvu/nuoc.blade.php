@extends('LayoutUser')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 style="display:inline-block"><strong>Chỉ số nước</strong></h2>
                    <div style="padding-bottom: 5px">
                        <a class="btn btn-success" name="addRoom" style="display: inline-block;"><i class="fa fa-search"></i> Xem</a>
                        <a class="btn btn-primary" name="editArea" style="display: inline-block;"><i class="fa fa-pencil"></i> Sửa</a>
                        <a class="btn btn-danger" name="deleteArea" style="display: inline-block;"><i class="fa fa-close"></i> Xóa</a>
                    </div>
                </div>
                <div class="x_content">
                    <form  class="form-horizontal" method="post" id="formRoomRent">
                        <div class="form-group">
                            <label class="col-fhd-1 col-xlg-1 col-md-1 col-sm-12 col-xs-2" for="serviceName">
                                Tháng
                            </label>
                            <div class="col-fhd-2 col-xlg-2 col-sm-12 col-xs-2 select2-focusser select2-offscreen">
                                <select style="width:15%;height:30px;float:left" id="payType" tabindex="-1" class="select2-offscreen">
                                    <option value="-1" selected="">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="2">4</option>
                                    <option value="2">5</option>
                                    <option value="2">6</option>
                                    <option value="2">7</option>
                                    <option value="2">8</option>
                                    <option value="2">9</option>
                                    <option value="2">10</option>
                                    <option value="2">11</option>
                                    <option value="2">12</option>
                                </select>
                            </div>
                            <label class="col-fhd-1 col-xlg-1 col-md-1 col-sm-12 col-xs-2" for="serviceName">
                                Năm
                            </label>
                            <div class="col-fhd-2 col-xlg-2 col-sm-12 col-xs-2">
                            <select style="width:15%;height:30px;float:left" id="payType" tabindex="-1" class="select2-focusser select2-offscreen">
                                    <option value="-1" selected="">2022</option>
                                    <option value="1">2023</option>
                                    <!-- <option value="2">3</option>
                                    <option value="2">4</option>
                                    <option value="2">5</option>
                                    <option value="2">6</option>
                                    <option value="2">7</option>
                                    <option value="2">8</option>
                                    <option value="2">9</option>
                                    <option value="2">10</option>
                                    <option value="2">11</option>
                                    <option value="2">12</option> -->
                                </select>
                            </div>
                            <!-- <div class="col-fhd-2 col-xlg-2 col-sm-12 col-xs-2">
                                <label style="width:15%;float:left">
                                    Kỳ
                                </label>
                                <div class="select2-container" id="s2id_payType" style="width: 85%;">
                                    <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                        <abbr class="select2-search-choice-close"></abbr>
                                        <span class="select2-arrow"></span>
                                    </a>
                                    <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1">
                                </div>
                                <select style="width:85%;float:left" id="payType" tabindex="-1" class="select2-offscreen">
                                    <option value="-1" selected="">Tất cả</option>
                                    <option value="1">Kỳ 15</option>
                                    <option value="2">Kỳ 30</option>
                                </select>
                            </div> -->
                            <label class="col-fhd-1 col-xlg-1 col-md-1 col-sm-12 col-xs-2">
                                Phòng
                            </label>
                            <div class="col-fhd-2 col-xlg-2 col-sm-12 col-xs-2">
                                <div class="select2-container" id="s2id_areaID" style="width: 100%;"><a href="javascript:void(0)" onclick="return false;" class="select2-choice select2-default" tabindex="-1"><abbr class="select2-search-choice-close"></abbr><span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen3"></div>
                            </div>
                            <label class="col-fhd-2 col-xlg-2 col-sm-12 col-xs-2" style="width:15%;float:left">
                                ...
                            </label>
                            
                        </div>
                        <div class="form-group" >
                            <p>
                                <strong>Lưu ý:</strong>
                                <br>
                                - Bạn phải gán dịch vụ thuộc loại nước cho khách thuê trước thì phần chỉ số này mới được tính cho phòng đó khi tính tiền.
                                <br>
                                - Đối với lần đầu tiên sử dụng phần mềm bạn sẽ phải nhập chỉ số cũ và mới cho tháng sử dụng đầu tiên, các tháng tiếp theo phần mềm sẽ tự động lấy chỉ số mới tháng trước làm chỉ số cũ tháng sau.
                            </p>
                        </div>
                        <div class="row" style="display: -webkit-box;">
                            <div class="col-md-7"></div>
                            <div class="col-md-5">
                                <input class="form-check-input" type="checkbox" value="" id="CheckError" checked="">
                                <label>Cảnh báo chỉ số nước cũ lớn hơn chỉ số nước mới</label>
                            </div>
                        </div>
                        <div class="form-group" >
                            <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="table" class="table table-striped table-bordered dt-responsive nowrap no-footer dtr-inline dataTable" cellspacing="0" width="100%" role="grid">
                                <thead>
                                    <tr role="row"><th class="sorting_disabled" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 15%;" aria-label="Nhà: activate to sort column ascending">Nhà</th><th class="sorting_disabled" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 15%;" aria-label="Phòng: activate to sort column ascending">Phòng</th><th class="sorting_disabled" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 25%;" aria-label="Khách thuê: activate to sort column ascending">Khách thuê</th><th class="sorting_disabled" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 15%;" aria-label="CS nước Cũ: activate to sort column ascending">CS nước Cũ</th><th class="sorting_disabled" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 15%;" aria-label="CS nước Mới: activate to sort column ascending">CS nước Mới</th><th style="width: 15%;" class="dt-body-right sorting_disabled" tabindex="0" aria-controls="table" rowspan="1" colspan="1" aria-label="Sử dụng: activate to sort column ascending">Sử dụng</th><th style="min-width: 40px; width: 40px;" data-orderable="false" class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th></tr>
                                </thead>
                                <tbody><tr role="row" class="odd"><td tabindex="0">Tầng 1</td><td>1</td><td></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="oldValue" value="0"></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="newValue" value="0"></td><td class=" dt-body-right">0.0</td><td><button type="button" class="btn btn-info btn-xs" name="saveRow" title="Lưu"><i class="fa fa-save"></i>  Lưu</button></td></tr><tr role="row" class="even"><td tabindex="0">Tầng 1</td><td>3</td><td>Nguyễn Quốc Nhựt</td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="oldValue" value="15"></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="newValue" value="30"></td><td class=" dt-body-right">15.0</td><td><button type="button" class="btn btn-info btn-xs" name="saveRow" title="Lưu"><i class="fa fa-save"></i>  Lưu</button></td></tr><tr role="row" class="odd"><td tabindex="0">Tầng 1</td><td>4</td><td></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="oldValue" value="0"></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="newValue" value="0"></td><td class=" dt-body-right">0.0</td><td><button type="button" class="btn btn-info btn-xs" name="saveRow" title="Lưu"><i class="fa fa-save"></i>  Lưu</button></td></tr><tr role="row" class="even"><td tabindex="0">Tầng 1</td><td>5</td><td></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="oldValue" value="0"></td><td><input type="text" class="form-control" style="width: 100%; text-align: right;" name="newValue" value="0"></td><td class=" dt-body-right">0.0</td><td><button type="button" class="btn btn-info btn-xs" name="saveRow" title="Lưu"><i class="fa fa-save"></i>  Lưu</button></td></tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-5"></div><div class="col-sm-7"></div></div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection