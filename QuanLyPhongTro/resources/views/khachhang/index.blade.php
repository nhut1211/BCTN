@extends('welcome')
@section('content')
<section class="home-slider owl-carousel" style="height:700px">
        <div class="slider-item" style="background-image: url('public/fontend/CssHome/images/bg_a.jpg');">   
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Nhà là nơi cho bạn những tiếng cười</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tôi có thể giúp gì cho bạn</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{URL::to('/dangnhap')}}" class="btn btn-primary px-4 py-3">Mời vào</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image: url('public/fontend/CssHome/images/bg_b.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hãy cười khi bạn đang ở nhà</h1>
                        <p class="mb-4">Hello Bạn tìm gì ở đây</p>
                        <p><a href="{{URL::to('/dangnhap')}}" class="btn btn-primary px-4 py-3">Mời vào</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection