@extends('LayoutUser')
@section('content')
<div class="navigate-base" class="align">
    <div class="title-base">
        <div class="title">
            <table>
                <tbody><tr>
                    <td class="align" width="10px">
                        <img src="App_Themes/Standard/Images/icon_04b.gif">
                    </td>
                    <td class="align">
                        <span id="ctl00_ContentPlaceHolder1_ctl00_lblTieuDe" class="Label" style="font-size:Medium;">THÔNG TIN THƯỜNG TRÚ SINH VIÊN</span>
                    </td>
                </tr>
            </tbody></table>
        </div>
    </div>

    <div id="ctl00_ContentPlaceHolder1_ctl00_pnlNoiDung">
	
        <table>
            <tbody><tr>
                <td style="padding-right: 0px;" class="align">Mã số sinh viên:</td>
                <td class="align">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_lblMaSV" class="Label" style="display:inline-block;color:#0033CC;font-weight:bold;width:258px;">1824801030170</span>
                </td>
                <td class="align">Họ tên sinh viên:</td>
                <td class="align">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_lblTenSV" class="Label" style="display:inline-block;color:#0033CC;font-weight:bold;width:258px;">Nguyễn Quốc Nhựt</span>
                </td>
            </tr>

            <tr>
                <td class="align">Ngày tháng năm sinh:</td>
                <td class="align">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_lblNgaySinh" class="Label" style="color:#0033CC;font-weight:bold;">12/11/2000</span>
                </td>
                <td class="align">Giới tính:</td>
                <td class="align">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_lblGioiTinh" class="Label" style="color:#0033CC;font-weight:bold;">Nam</span>
                </td>
            </tr>

            <tr>
                <td class="align">Lớp:</td>
                <td class="align">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_lblLop" class="Label" style="color:#0033CC;font-weight:bold;">D18PM03</span>
                </td>

                <td class="align">Nơi sinh:</td>
                <td class="align">
                    <select name="ctl00$ContentPlaceHolder1$ctl00$TENNS" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ctl00$TENNS\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ctl00_TENNS" class="DropDown" style="width:258px;">
		<option value="">---Chọn---</option>
		<option value="00156">CHND Trung hoa</option>
		<option value="006431">Liên bang Nga</option>
		<option value="01">Thành phố Hà Nội</option>
		<option value="02">Tỉnh Hà Giang</option>
		<option value="04">Tỉnh Cao Bằng</option>
		<option value="06">Tỉnh Bắc Kạn</option>
		<option value="08">Tỉnh Tuyên Quang</option>
		<option value="10">Tỉnh Lào Cai</option>
		<option value="11">Tỉnh Điện Biên</option>
		<option value="1111">Lào</option>
		<option value="12">Tỉnh Lai Châu</option>
		<option value="14">Tỉnh Sơn La</option>
		<option value="15">Tỉnh Yên Bái</option>
		<option value="17">Tỉnh Hoà Bình</option>
		<option value="19">Tỉnh Thái Nguyên</option>
		<option value="20">Tỉnh Lạng Sơn</option>
		<option value="22">Tỉnh Quảng Ninh</option>
		<option value="24">Tỉnh Bắc Giang</option>
		<option value="25">Tỉnh Phú Thọ</option>
		<option value="26">Tỉnh Vĩnh Phúc</option>
		<option value="27">Tỉnh Bắc Ninh</option>
		<option value="30">Tỉnh Hải Dương</option>
		<option value="31">Thành phố Hải Phòng</option>
		<option value="33">Tỉnh Hưng Yên</option>
		<option value="34">Tỉnh Thái Bình</option>
		<option value="35">Tỉnh Hà Nam</option>
		<option value="36">Tỉnh Nam Định</option>
		<option value="37">Tỉnh Ninh Bình</option>
		<option value="38">Tỉnh Thanh Hóa</option>
		<option value="40">Tỉnh Nghệ An</option>
		<option value="42">Tỉnh Hà Tĩnh</option>
		<option value="44">Tỉnh Quảng Bình</option>
		<option value="45">Tỉnh Quảng Trị</option>
		<option value="46">Tỉnh Thừa Thiên Huế</option>
		<option value="48">Thành phố Đà Nẵng</option>
		<option value="49">Tỉnh Quảng Nam</option>
		<option value="51">Tỉnh Quảng Ngãi</option>
		<option value="52">Tỉnh Bình Định</option>
		<option value="54">Tỉnh Phú Yên</option>
		<option value="56">Tỉnh Khánh Hòa</option>
		<option value="58">Tỉnh Ninh Thuận</option>
		<option value="60">Tỉnh Bình Thuận</option>
		<option value="62">Tỉnh Kon Tum</option>
		<option value="64">Tỉnh Gia Lai</option>
		<option value="66">Tỉnh Đắk Lắk</option>
		<option value="67">Tỉnh Đắk Nông</option>
		<option value="68">Tỉnh Lâm Đồng</option>
		<option value="70">Tỉnh Bình Phước</option>
		<option value="72">Tỉnh Tây Ninh</option>
		<option selected="selected" value="74">Tỉnh Bình Dương</option>
		<option value="75">Tỉnh Đồng Nai</option>
		<option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
		<option value="79">Thành phố Hồ Chí Minh</option>
		<option value="80">Tỉnh Long An</option>
		<option value="82">Tỉnh Tiền Giang</option>
		<option value="83">Tỉnh Bến Tre</option>
		<option value="84">Tỉnh Trà Vinh</option>
		<option value="86">Tỉnh Vĩnh Long</option>
		<option value="87">Tỉnh Đồng Tháp</option>
		<option value="89">Tỉnh An Giang</option>
		<option value="91">Tỉnh Kiên Giang</option>
		<option value="92">Thành phố Cần Thơ</option>
		<option value="93">Tỉnh Hậu Giang</option>
		<option value="94">Tỉnh Sóc Trăng</option>
		<option value="95">Tỉnh Bạc Liêu</option>
		<option value="96">Tỉnh Cà Mau</option>

	</select>

                    <span id="ctl00_ContentPlaceHolder1_ctl00_valTENNS" style="color:Red;font-weight:bold;">*</span>
                </td>

            </tr>

            <tr>
                <td class="align">Quốc tịch:</td>
                <td class="align">
                    <select name="ctl00$ContentPlaceHolder1$ctl00$QuocGia" id="ctl00_ContentPlaceHolder1_ctl00_QuocGia" class="DropDown" style="font-weight:normal;width:258px;">
		<option value="">---Chọn---</option>
		<option selected="selected" value="0000">Việt Nam</option>
		<option value="0001">Mỹ</option>
		<option value="0002">Lào</option>
		<option value="0156">CHND Trung hoa</option>
		<option value="0643">Liên bang Nga</option>

	</select>
                    <span id="ctl00_ContentPlaceHolder1_ctl00_valQuocGia" style="color:Red;font-weight:bold;">*</span>
                    
                </td>
                <td class="align">Dân tộc:</td>
                <td class="align">
                    <select name="ctl00$ContentPlaceHolder1$ctl00$MADT" id="ctl00_ContentPlaceHolder1_ctl00_MADT" class="DropDown" style="font-size:13px;font-weight:normal;width:258px;">
		<option value="">---Chọn---</option>
		<option selected="selected" value="01">Kinh</option>
		<option value="02">Tày</option>
		<option value="03">Thái</option>
		<option value="04">Hoa</option>
		<option value="05">Khơ-me</option>
		<option value="06">Mường</option>
		<option value="07">Nùng</option>
		<option value="08">Hmông</option>
		<option value="09">Dao</option>
		<option value="10">Gia-rai</option>
		<option value="11">Ngái</option>
		<option value="12">Ê-đê</option>
		<option value="13">Ba-na</option>
		<option value="14">Xơ-đăng</option>
		<option value="15">Sán Chay</option>
		<option value="16">Cơ-ho</option>
		<option value="17">Chăm</option>
		<option value="18">Sán Dìu</option>
		<option value="19">Hrê</option>
		<option value="20">Mnông</option>
		<option value="21">Ra-glai</option>
		<option value="22">Xtiêng</option>
		<option value="23">Bru-Vân Kiều</option>
		<option value="24">Thổ</option>
		<option value="25">Giáy</option>
		<option value="26">Cơ-tu</option>
		<option value="27">Gié-Triêng</option>
		<option value="28">Mạ</option>
		<option value="29">Khơ-mú</option>
		<option value="30">Co</option>
		<option value="31">Ta-ôi</option>
		<option value="32">Chơ-ro</option>
		<option value="33">Kháng</option>
		<option value="34">Xinh-mun</option>
		<option value="35">Hà Nhì</option>
		<option value="36">Chu-ru</option>
		<option value="37">Lào</option>
		<option value="38">La Chi</option>
		<option value="39">La Ha</option>
		<option value="40">Phù Lá</option>
		<option value="41">La Hủ</option>
		<option value="42">Lự</option>
		<option value="43">Lô Lô</option>
		<option value="44">Chứt</option>
		<option value="45">Mảng</option>
		<option value="46">Pà Thẻn</option>
		<option value="47">Cơ Lao</option>
		<option value="48">Cống</option>
		<option value="49">Bố Y</option>
		<option value="50">Si La</option>
		<option value="51">Pu Péo</option>
		<option value="52">Brâu</option>
		<option value="53">Ơ Đu</option>
		<option value="54">Rơ-măm</option>
		<option value="55">Người nước ngoài</option>

	</select>
                    <span id="ctl00_ContentPlaceHolder1_ctl00_valMADT" style="color:Red;font-weight:bold;">*</span>
                    
                </td>

            </tr>
            <tr>
                <td class="align">Số CMND: </td>
                <td class="align">
                    <input name="ctl00$ContentPlaceHolder1$ctl00$SOCMND" type="text" value="281231293" id="ctl00_ContentPlaceHolder1_ctl00_SOCMND" class="TextBox" style="font-weight:normal;width:250px;">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_valSOCMND" style="color:Red;font-weight:bold;">*</span>
                    
                </td>

                <td class="align">Ngày Cấp:</td>
                <td class="align">
                    <input name="ctl00$ContentPlaceHolder1$ctl00$NGAYCAP" type="text" value="29/06/2015                                        " id="ctl00_ContentPlaceHolder1_ctl00_NGAYCAP" class="TextBox" onchange="return ValidDate(this)" style="width:250px;">

                    
                    <input type="hidden" name="ctl00$ContentPlaceHolder1$ctl00$txtNgayCapNghe_MaskedEditExtende_ClientState" id="ctl00_ContentPlaceHolder1_ctl00_txtNgayCapNghe_MaskedEditExtende_ClientState">
                    <img id="img1" src="Images/Calendar_scheduleHS.png" class="alignn" style="height: 18px; width: 18px">
                      
                </td>                
            </tr>
            <tr>
                <td class="align">Nơi cấp: </td>
                <td class="align">
                     <select name="ctl00$ContentPlaceHolder1$ctl00$NOICAP" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ctl00$NOICAP\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ctl00_NOICAP" class="DropDown" style="width:258px;">
		<option value="">---Chọn---</option>
		<option value="00156">CHND Trung hoa</option>
		<option value="006431">Liên bang Nga</option>
		<option value="01">Thành phố Hà Nội</option>
		<option value="02">Tỉnh Hà Giang</option>
		<option value="04">Tỉnh Cao Bằng</option>
		<option value="06">Tỉnh Bắc Kạn</option>
		<option value="08">Tỉnh Tuyên Quang</option>
		<option value="10">Tỉnh Lào Cai</option>
		<option value="11">Tỉnh Điện Biên</option>
		<option value="1111">Lào</option>
		<option value="12">Tỉnh Lai Châu</option>
		<option value="14">Tỉnh Sơn La</option>
		<option value="15">Tỉnh Yên Bái</option>
		<option value="17">Tỉnh Hoà Bình</option>
		<option value="19">Tỉnh Thái Nguyên</option>
		<option value="20">Tỉnh Lạng Sơn</option>
		<option value="22">Tỉnh Quảng Ninh</option>
		<option value="24">Tỉnh Bắc Giang</option>
		<option value="25">Tỉnh Phú Thọ</option>
		<option value="26">Tỉnh Vĩnh Phúc</option>
		<option value="27">Tỉnh Bắc Ninh</option>
		<option value="30">Tỉnh Hải Dương</option>
		<option value="31">Thành phố Hải Phòng</option>
		<option value="33">Tỉnh Hưng Yên</option>
		<option value="34">Tỉnh Thái Bình</option>
		<option value="35">Tỉnh Hà Nam</option>
		<option value="36">Tỉnh Nam Định</option>
		<option value="37">Tỉnh Ninh Bình</option>
		<option value="38">Tỉnh Thanh Hóa</option>
		<option value="40">Tỉnh Nghệ An</option>
		<option value="42">Tỉnh Hà Tĩnh</option>
		<option value="44">Tỉnh Quảng Bình</option>
		<option value="45">Tỉnh Quảng Trị</option>
		<option value="46">Tỉnh Thừa Thiên Huế</option>
		<option value="48">Thành phố Đà Nẵng</option>
		<option value="49">Tỉnh Quảng Nam</option>
		<option value="51">Tỉnh Quảng Ngãi</option>
		<option value="52">Tỉnh Bình Định</option>
		<option value="54">Tỉnh Phú Yên</option>
		<option value="56">Tỉnh Khánh Hòa</option>
		<option value="58">Tỉnh Ninh Thuận</option>
		<option value="60">Tỉnh Bình Thuận</option>
		<option value="62">Tỉnh Kon Tum</option>
		<option value="64">Tỉnh Gia Lai</option>
		<option value="66">Tỉnh Đắk Lắk</option>
		<option value="67">Tỉnh Đắk Nông</option>
		<option value="68">Tỉnh Lâm Đồng</option>
		<option value="70">Tỉnh Bình Phước</option>
		<option value="72">Tỉnh Tây Ninh</option>
		<option selected="selected" value="74">Tỉnh Bình Dương</option>
		<option value="75">Tỉnh Đồng Nai</option>
		<option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
		<option value="79">Thành phố Hồ Chí Minh</option>
		<option value="80">Tỉnh Long An</option>
		<option value="82">Tỉnh Tiền Giang</option>
		<option value="83">Tỉnh Bến Tre</option>
		<option value="84">Tỉnh Trà Vinh</option>
		<option value="86">Tỉnh Vĩnh Long</option>
		<option value="87">Tỉnh Đồng Tháp</option>
		<option value="89">Tỉnh An Giang</option>
		<option value="91">Tỉnh Kiên Giang</option>
		<option value="92">Thành phố Cần Thơ</option>
		<option value="93">Tỉnh Hậu Giang</option>
		<option value="94">Tỉnh Sóc Trăng</option>
		<option value="95">Tỉnh Bạc Liêu</option>
		<option value="96">Tỉnh Cà Mau</option>

	</select>

                    <span id="ctl00_ContentPlaceHolder1_ctl00_valNOICAP" style="color:Red;font-weight:bold;">*</span>
                </td>
               

                <td class="align">Số điện thoại: </td>
                <td class="align">
                    <input name="ctl00$ContentPlaceHolder1$ctl00$DienThoai1SV" type="text" value="0947420100" id="ctl00_ContentPlaceHolder1_ctl00_DienThoai1SV" class="TextBox" style="font-weight:normal;width:250px;">
                    <span id="ctl00_ContentPlaceHolder1_ctl00_valDienThoai1SV" style="color:Red;font-weight:bold;">*</span>
                    <br>
                    
                    <span id="ctl00_ContentPlaceHolder1_ctl00_valdt1" style="color:Red;visibility:hidden;">Số điện thoại không hợp lệ</span>
                </td>               
            </tr>
            <tr>
                <td class="align">Email: </td>
                <td class="align">
                    <input name="ctl00$ContentPlaceHolder1$ctl00$email1" type="text" value="1824801030170@student.tdmu.edu.vn" id="ctl00_ContentPlaceHolder1_ctl00_email1" disabled="disabled" class="TextBox" style="color:Blue;font-weight:normal;width:250px;">
                    
                </td>
            </tr>
            <tr>
                <td class="align" colspan="4">
                    <fieldset>
                        <legend style="text-align: left">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_Label1" style="color:Navy;font-size:14px;font-weight:bold;">Hộ khẩu thường trú</span>
                        </legend>
                        <table>
                            <tbody><tr>
                                <td class="align" width="142px">Tỉnh thành: </td>
                                <td class="align">
                                    <select name="ctl00$ContentPlaceHolder1$ctl00$hktinh" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ctl00$hktinh\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ctl00_hktinh" class="DropDown" style="font-weight:normal;width:477px;">
		<option value="">---Chọn---</option>
		<option value="00156">CHND Trung hoa</option>
		<option value="006431">Liên bang Nga</option>
		<option value="01">Thành phố Hà Nội</option>
		<option value="02">Tỉnh Hà Giang</option>
		<option value="04">Tỉnh Cao Bằng</option>
		<option value="06">Tỉnh Bắc Kạn</option>
		<option value="08">Tỉnh Tuyên Quang</option>
		<option value="10">Tỉnh Lào Cai</option>
		<option value="11">Tỉnh Điện Biên</option>
		<option value="1111">Lào</option>
		<option value="12">Tỉnh Lai Châu</option>
		<option value="14">Tỉnh Sơn La</option>
		<option value="15">Tỉnh Yên Bái</option>
		<option value="17">Tỉnh Hoà Bình</option>
		<option value="19">Tỉnh Thái Nguyên</option>
		<option value="20">Tỉnh Lạng Sơn</option>
		<option value="22">Tỉnh Quảng Ninh</option>
		<option value="24">Tỉnh Bắc Giang</option>
		<option value="25">Tỉnh Phú Thọ</option>
		<option value="26">Tỉnh Vĩnh Phúc</option>
		<option value="27">Tỉnh Bắc Ninh</option>
		<option value="30">Tỉnh Hải Dương</option>
		<option value="31">Thành phố Hải Phòng</option>
		<option value="33">Tỉnh Hưng Yên</option>
		<option value="34">Tỉnh Thái Bình</option>
		<option value="35">Tỉnh Hà Nam</option>
		<option value="36">Tỉnh Nam Định</option>
		<option value="37">Tỉnh Ninh Bình</option>
		<option value="38">Tỉnh Thanh Hóa</option>
		<option value="40">Tỉnh Nghệ An</option>
		<option value="42">Tỉnh Hà Tĩnh</option>
		<option value="44">Tỉnh Quảng Bình</option>
		<option value="45">Tỉnh Quảng Trị</option>
		<option value="46">Tỉnh Thừa Thiên Huế</option>
		<option value="48">Thành phố Đà Nẵng</option>
		<option value="49">Tỉnh Quảng Nam</option>
		<option value="51">Tỉnh Quảng Ngãi</option>
		<option value="52">Tỉnh Bình Định</option>
		<option value="54">Tỉnh Phú Yên</option>
		<option value="56">Tỉnh Khánh Hòa</option>
		<option value="58">Tỉnh Ninh Thuận</option>
		<option value="60">Tỉnh Bình Thuận</option>
		<option value="62">Tỉnh Kon Tum</option>
		<option value="64">Tỉnh Gia Lai</option>
		<option value="66">Tỉnh Đắk Lắk</option>
		<option value="67">Tỉnh Đắk Nông</option>
		<option value="68">Tỉnh Lâm Đồng</option>
		<option value="70">Tỉnh Bình Phước</option>
		<option value="72">Tỉnh Tây Ninh</option>
		<option selected="selected" value="74">Tỉnh Bình Dương</option>
		<option value="75">Tỉnh Đồng Nai</option>
		<option value="77">Tỉnh Bà Rịa - Vũng Tàu</option>
		<option value="79">Thành phố Hồ Chí Minh</option>
		<option value="80">Tỉnh Long An</option>
		<option value="82">Tỉnh Tiền Giang</option>
		<option value="83">Tỉnh Bến Tre</option>
		<option value="84">Tỉnh Trà Vinh</option>
		<option value="86">Tỉnh Vĩnh Long</option>
		<option value="87">Tỉnh Đồng Tháp</option>
		<option value="89">Tỉnh An Giang</option>
		<option value="91">Tỉnh Kiên Giang</option>
		<option value="92">Thành phố Cần Thơ</option>
		<option value="93">Tỉnh Hậu Giang</option>
		<option value="94">Tỉnh Sóc Trăng</option>
		<option value="95">Tỉnh Bạc Liêu</option>
		<option value="96">Tỉnh Cà Mau</option>

	</select>
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valhktinh" style="color:Red;font-weight:bold;">*</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="align">Quận huyện: </td>
                                <td class="align">
                                    <select name="ctl00$ContentPlaceHolder1$ctl00$hkhuyen" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ctl00$hkhuyen\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ctl00_hkhuyen" class="DropDown" style="font-weight:normal;width:477px;">
		<option value="724">Thị xã Dĩ An</option>
		<option value="725">Thị xã Thuận An</option>
		<option value="720">Huyện Dầu Tiếng</option>
		<option value="723">Thị xã Tân Uyên</option>
		<option value="718">Thành phố Thủ Dầu Một</option>
		<option value="719">Huyện Bàu Bàng</option>
		<option value="722">Huyện Phú Giáo</option>
		<option value="726">Huyện Bắc Tân Uyên</option>
		<option selected="selected" value="721">Thị xã Bến Cát</option>
		<option value="">(Khác)</option>

	</select>
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valhkhuyen" style="color:Red;font-weight:bold;">*</span>
                                </td>
                            </tr>

                            <tr>

                                <td class="align">Phường xã: </td>
                                <td class="align">
                                    <select name="ctl00$ContentPlaceHolder1$ctl00$dcgd2" id="ctl00_ContentPlaceHolder1_ctl00_dcgd2" class="DropDown" style="font-weight:normal;width:477px;">
		<option value="440204">Phường Thới Hòa</option>
		<option value="440206">Xã An Tây</option>
		<option value="440207">Xã An Điền</option>
		<option selected="selected" value="440202">Phường Chánh Phú Hòa</option>
		<option value="440205">Phường Tân Định</option>
		<option value="440208">Xã Phú An</option>
		<option value="440203">Phường Hòa Lợi</option>
		<option value="440201">Phường Mỹ Phước</option>
		<option value="">(Khác)</option>

	</select>
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valdcgd2" style="color:Red;font-weight:bold;">*</span>
                                </td>
                            </tr>
                            <tr>

                                <td class="align">Số nhà, tên đường,
                                    <br>
                                    ấp/ khu phố: </td>
                                <td class="align">
                                    <textarea name="ctl00$ContentPlaceHolder1$ctl00$DCGD1" rows="2" cols="20" id="ctl00_ContentPlaceHolder1_ctl00_DCGD1" class="TextBox" style="font-weight:normal;height:30px;width:471px;">166,khu phố 5, phường Chánh Phú Hòa, thị xã Bến Cát</textarea>
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valDCGD1" style="color:Red;font-weight:bold;">*</span>
                                </td>
                            </tr>
                        </tbody></table>

                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <fieldset>
                        <legend style="text-align: left">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_Label2" style="color:Navy;font-size:14px;font-weight:bold;">Thông tin mẹ</span>
                        </legend>
                        <table>


                            <tbody><tr>
                                <td class="align" width="142px">Họ và tên mẹ: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$me" type="text" value="Trần Thị Ánh Tuyết" id="ctl00_ContentPlaceHolder1_ctl00_me" class="TextBox" style="font-weight:normal;width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valme" style="color:Red;font-weight:bold;">*</span>
                                </td>

                                <td class="align">Năm sinh: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$nsme" type="text" value="1975" maxlength="4" id="ctl00_ContentPlaceHolder1_ctl00_nsme" class="TextBox" style="font-weight:normal;width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valnsme" style="color:Red;font-weight:bold;">*</span>

                                </td>
                            </tr>

                            <tr>
                                <td class="align">Nghề nghiệp: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$NGHEME" type="text" value="Nội Trợ" id="ctl00_ContentPlaceHolder1_ctl00_NGHEME" class="TextBox" style="font-weight:normal;width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valNGHEME" style="color:Red;font-weight:bold;">*</span>
                                </td>

                                <td class="align">Số điện thoại liên hệ: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$DienThoaiMe" type="text" value="0945449636" id="ctl00_ContentPlaceHolder1_ctl00_DienThoaiMe" class="TextBox" style="width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valDienThoaiMe" style="color:Red;font-weight:bold;">*</span>
                                    <br>
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_RegularExpressionValidator10" style="color:Red;visibility:hidden;">Số điện thoại không hợp lệ</span>
                                </td>
                            </tr>
                        </tbody></table>
                    </fieldset>

                </td>
            </tr>
            <tr>
                <td class="align" colspan="4">
                    <fieldset>
                        <legend style="text-align: left">
                            <span id="ctl00_ContentPlaceHolder1_ctl00_Label3" style="color:Navy;font-size:14px;font-weight:bold;">Thông tin cha</span>
                        </legend>
                        <table>
                            <tbody><tr>
                                <td class="align" width="142px">Họ và tên cha: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$cha" type="text" value="Nguyễn Quốc Pháp" id="ctl00_ContentPlaceHolder1_ctl00_cha" class="TextBox" style="font-weight:normal;width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valcha" style="color:Red;font-weight:bold;">*</span>
                                </td>

                                <td class="align">Năm sinh: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$nscha" type="text" value="1976" maxlength="4" id="ctl00_ContentPlaceHolder1_ctl00_nscha" class="TextBox" style="font-weight:normal;width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valnscha" style="color:Red;border-color:Red;font-weight:bold;">*</span>

                                </td>
                            </tr>

                            <tr>
                                <td class="align">Nghề nghiệp: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$NGHECHA" type="text" value="Tài Xế" id="ctl00_ContentPlaceHolder1_ctl00_NGHECHA" class="TextBox" style="font-weight:normal;width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valNGHECHA" style="color:Red;font-weight:bold;">*</span>
                                </td>

                                <td class="align">Số điện thoại liên hệ: </td>
                                <td class="align">
                                    <input name="ctl00$ContentPlaceHolder1$ctl00$DienThoaiCha" type="text" value="0918449636" id="ctl00_ContentPlaceHolder1_ctl00_DienThoaiCha" class="TextBox" style="width:250px;">
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_valDienThoaiCha" style="color:Red;font-weight:bold;">*</span>
                                    <br>
                                    <span id="ctl00_ContentPlaceHolder1_ctl00_RegularExpressionValidator8" style="color:Red;visibility:hidden;">Số điện thoại không hợp lệ</span>
                                </td>
                            </tr>
                        </tbody></table>
                    </fieldset>
                </td>
            </tr>


        </tbody></table>
    
</div>



    <div style="text-align: center">
        <input type="submit" name="ctl00$ContentPlaceHolder1$ctl00$btnSave" value="LƯU THÔNG TIN" id="ctl00_ContentPlaceHolder1_ctl00_btnSave" class="DefaultButton" style="height:30px;">
    </div>


</div>
@endsection