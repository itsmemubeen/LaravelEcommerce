@extends('theme.newtheme.website')

@section('content')
<!-- page-title -->
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="page-title__content">
                    <h5>Essentials Coolers</h5>
                    <h3><span>About Us</span></h3>
                    <p>Keep your essentials fresh.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="about-us mar-y">
    <div class="container">
        <div class="row mar-y">
            <div class="col-12 col-lg-6">
                <div class="about-us__box">
                    <div class="about-us__img">
                        <img src="{{ asset('public/theme/newtheme/images/about-us-img-1.png') }}" alt="images" class="imgFluid">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-us__content">
                    <h1>Your Heading</h1>
                    <h1>Goes Here</h1>
                    <p>he Essential cooler is the perfect solution for those serious about preserving the flavor and
                        potency of essential oils. With a high tech and compact design, made from high quality
                        materials, the essential cooler is a lockable cooler made to secure and preserve sensitive
                        items. This unique product only consumes 65 Watts and offers surprising features that will
                        quickly make it an essential part of your preservation needs. The Relative Humidity monitor, 3
                        USB ports, and through the glass lock design, are just a few of the attributes that make this
                        cooler a perfect addition to your home or office.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="">
                    <div class="about-banner__img">
                        <a href="images/vd-1.mp4" data-fancybox="gallery">
                        <img src="{{ asset('public/theme/newtheme/images/about-banner-img.png') }}" alt="image" class="imgFluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mar-y">
            <div class="col-12 col-lg-6">
                <div class="about-us__content">
                    <h1>Your Heading</h1>
                    <h1>Goes Here</h1>
                    <p>The Essential cooler is the perfect solution for those serious about preserving the flavor and
                        potency of essential oils. With a high tech and compact design, made from high quality
                        materials, the essential cooler is a lockable cooler made to secure and preserve sensitive
                        items. This unique product only consumes 65 Watts and offers surprising features that will
                        quickly make it an essential part of your preservation needs. The Relative Humidity monitor, 3
                        USB ports, and through the glass lock design, are just a few of the attributes that make this
                        cooler a perfect addition to your home or office.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-us__box">
                    <div class="about-us__img">
                        <img src="{{ asset('public/theme/newtheme/images/about-img2.png') }}" alt="images" class="imgFluid mt-5">
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/checkout.js') }}"></script>
@endsection