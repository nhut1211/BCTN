@extends('welcome')
@section('content')
<section>
    <div class="container">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Đăng ký</h1>
            </div>
            @if ($errors->any())
                        <div class="alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{URL::to('/dangky-taikhoan')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="ho_ten" type="text" placeholder="Điền tên của bạn..." data-sb-validations="required" />
                            <label for="name">Họ và tên</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="dien_thoai" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Số điện thoại</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="e_mail" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email không hợp lệ.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="mat_khau" type="password" placeholder="Enter your password..." data-sb-validations="required"></input>
                            <label for="password">Mật khẩu</label>
                            <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" name="nhaplai_matkhau" type="password" placeholder="Enter your password..." data-sb-validations="required"></input>
                            <label for="password">Nhập lại mật khẩu</label>
                            <div class="invalid-feedback" data-sb-feedback="password:required">A password is required.</div>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" id="submitButton" name="dang_ky" type="submit">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection