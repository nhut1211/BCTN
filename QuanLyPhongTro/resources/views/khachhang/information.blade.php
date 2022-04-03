@extends('welcome')
@section('content')
<form action="{{URL::to('/information')}}" method="post">
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-2">Nhà là nơi để về</h2>
                <p>Không ai có thể cho bạn sự bình yên bằng gia đình</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <h1 style="color:blue;font-size:50px">1</h1>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Teeth Whitening</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <h1 style="color:blue;font-size:50px">2</h1>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Teeth Cleaning</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <h1 style="color:blue;font-size:50px">3</h1>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Quality Brackets</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <h1 style="color:blue;font-size:50px">4</h1>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Modern Anesthetic</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-wrap mt-5">
        <div class="row d-flex no-gutters image-information" style="background-image: url('public/fontend/CssHome/images/information_1.jpg'); background-size:cover;">
            <div class="Details1 col-md-6 img"></div>
            <div class="col-md-6 d-flex">
                <div class="about-wrap">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2">Tiện ích của Website</h2>
                        <p>Không ai có thể cho bạn sự bình yên bằng gia đình</p>
                    </div>
                    <div class="list-services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3>Dễ truy cập, dễ quản lý</h3>
                            <p>Hãy trải nghiệm thử và bạn sẽ thích nó</p>
                        </div>
                    </div>
                    <div class="list-services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3>Lưu thông tin nhanh gọn và dễ sử dụng</h3>
                            <p>I don't no</p>
                        </div>
                    </div>
                    <div class="list-services d-flex ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-check2"></span>
                        </div>
                        <div class="text">
                            <h3>Thanh toán hóa đơn nhanh, đơn giãn</h3>
                            <p>1 + 1 = 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container" >
        <div class="row mb-5">
            <div class="col-md-3" style="margin-left: 20px;">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">DentaCare.</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="col-md-4 pr-md-4" style="margin-left: 80px;">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('public/fontend/CssHome/images/information_1.jpg');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="        background-image: url('public/fontend/CssHome/images/information_1.jpg');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-left: 50px;">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Liên hệ</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100010816339294"><span class="icon-facebook" style="margin-right:30px;"></span><span class="text">Nguyễn Nhựt</span></a></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">094 7420 100</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope" style="margin-right:30px;"></span><span class="text">Nguyenquocnhut1211@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</form>
@endsection
