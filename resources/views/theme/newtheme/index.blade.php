@extends('theme.newtheme.website')

@section('content')

<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="banner__content">
                    <h5>{!! xss_clean(get_trans_option('hero_title')) !!}</h5>
                    <h3>{!! xss_clean(get_trans_option('hero_title')) !!}</h3>
                    {!! xss_clean(get_trans_option('hero_content')) !!}
                    <a href="#" class="themeBtn hvr-shrink">read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="collection">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 collectionSlider slick-initialized slick-slider slick-dotted" role="toolbar"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: inline-block;">Previous</button>
                <div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 2225px; transform: translate3d(-445px, 0px, 0px);"><div class="collection-slider__img slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 425px;">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div><div class="collection-slider__img slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide10" style="width: 425px;">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div><div class="collection-slider__img slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide11" style="width: 425px;">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div><div class="collection-slider__img slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide12" style="width: 425px;">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div><div class="collection-slider__img slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 425px;">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div></div></div>
                
                
            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: inline-block;">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation10" id="slick-slide10"><button type="button" data-role="none" role="button" tabindex="0">1</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation11" id="slick-slide11"><button type="button" data-role="none" role="button" tabindex="0">2</button></li><li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation12" id="slick-slide12"><button type="button" data-role="none" role="button" tabindex="0">3</button></li></ul></div>
            <div class="col-12 col-lg-7">
                <div class="collection-content">
                    <h2>collection 2022</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. </p>
                </div>
                <div id="timer"><div>248<span>days</span></div><div>13<span>hours</span></div><div>22<span>minutes</span></div><div>15<span>seconds</span></div></div>
                <div class="collection-btn mt-3">
                    <a href="shops.php" class="hvr-shrink">shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- collection -->
{{-- <section class="collection">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 collectionSlider">
                <div class="collection-slider__img">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div>
                <div class="collection-slider__img">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div>
                <div class="collection-slider__img">
                    <img src="https://demo.amgdigitalagency.com/html/essential-coolers/v3/images/collection-img.png" alt="image" class="imgFluid">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="collection-content">
                    <h2>collection 2022</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultrices gravida. </p>
                </div>
                <div id="timer"></div>
                <div class="collection-btn mt-3">
                    <a href="#" class="hvr-shrink">shop now</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@php $trending_categories = \App\Entity\Category\Category::get(); @endphp
<!-- Project Cards Start -->
<section class=" sigma-cards my-5">
    <div class="container">
        <div class="section-project text-center mb-3">
            <div class="row justify-content-center align-items center">
                <div class="col-12 col-lg-6">
                    <div class="section-heading">
                        <h2>RECENT PROJECTS</h2>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="section-content mt-2">
                        <a href="#">Custom Wrapped</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row businessCards justify-content-center">
			@foreach($trending_categories as $trending_category)
						<div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="trending_category{{ $trending_category->id }}" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									@php $products = $trending_category->products; @endphp
									@foreach($products as $product)
                                    <div class="col-12 col-lg-3">
                                        <div class="sigma-cards__box">
                                                <a href="single-product.php">
                                                    <div class="sigma-card__img">
                                                        <a href="{{ url('product/'.$product->slug) }}">
                                                            <img class="default-img" src="{{ asset('storage/app/'. $product->image->file_path) }}" alt="{{ $product->translation->name }}">
                                                            @if($product->in_stock == 0)
                                                                <span class="out-of-stock">{{ _lang('Out Of Stock') }}</span>
                                                            @elseif($product->featured_tag != NULL)
                                                                <span class="{{ $product->featured_tag }}">{{ _dlang(str_replace('_',' ',$product->featured_tag)) }}</span>
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="sigma-card__content">
                                                        <h3><a href="{{ url('product/'.$product->slug) }}">{{ $product->translation->name }}</a></h3>
                                                        <div class="price">		
                                                            @if($product->special_price != '' || (int) $product->special_price != 0 )
                                                                <span class="text-danger">
                                                                    <s>{!! xss_clean(show_price($product->price)) !!}</s>
                                                                </span>
                                                                <span class="text-success">{!! xss_clean(show_price($product->special_price)) !!}</span>
                                                            @else
                                                                <span>{!! xss_clean(show_price($product->price)) !!}</span>	
                                                            @endif
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    @endforeach
								</div>
							</div>
						</div>
			@endforeach
        </div> --}}
        <div class="row businessCards justify-content-center">
            @foreach($trending_categories as $trending_category)
            @php $products = $trending_category->products; @endphp
			@foreach($products as $product)
            <div class="col-12 col-lg-3">
            <div class="sigma-cards__box">
                    <a href="single-product.php">
                        <a href="{{ url('product/'.$product->slug) }}">
                        <div class="sigma-card__img">
                            <img class="default-img" src="{{ asset('storage/app/'. $product->image->file_path) }}" alt="{{ $product->translation->name }}">
                        </div>
                        </a>
                        <div class="sigma-card__content">
                            <h6><a href="{{ url('product/'.$product->slug) }}">{{ $product->translation->name }}</a></h6>
                            <div class="price">
                                @if($product->special_price != '' || (int) $product->special_price != 0 )
                                <span class="text-danger">
                                    <s>{!! xss_clean(show_price($product->price)) !!}</s>
                                </span>
                                <span class="text-success">{!! xss_clean(show_price($product->special_price)) !!}</span>
                            @else
                                <span>{!! xss_clean(show_price($product->price)) !!}</span>	
                            @endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</section>
<!-- Project Cards End -->

<!-- About Essential Start -->
<section class="about-essential">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="about-heading mt-5">
                    <h1>{{ get_trans_option('three_column_1_title') }}</h1>
                    <p>{!! xss_clean(get_trans_option('three_column_1_sub_title')) !!}</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-img mt-5">
                    <img src="{{ get_option('three_column_1_background_image') != '' ? asset('public/uploads/media/'.get_option('three_column_1_background_image')) : asset('public/theme/default/images/no-banner.jpg') }}" alt="#"  class="imgFluid">
                </div>
            </div>

            <div class="col-12">
                <div class="laptop-img">
                    <img src="{{ get_option('three_column_2_background_image') != '' ? asset('public/uploads/media/'.get_option('three_column_2_background_image')) : asset('public/theme/default/images/no-banner.jpg') }}" alt="#" class="imgFluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-blog mar-y">
    <div class="container">
        <div class="our-blog__title text-center mb-5">
            <h2>our blog</h2>
        </div>
{{-- 
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="our-blog__content mt-5 ml-4">
                    <h4>Instagram Favorite</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="our-blog__btn ml-4">
                    <a href="#" class="hvr-shrink">read more</a>
                </div>
            </div>
            <div class="col-12 col-lg-6  offset-lg-1">
                <div class="our-blog__img">
                    <img src="images/our-blog-img.png" alt="image" class="imgFluid">
                </div>
            </div>
        </div> --}}
    </div>
</section>

<!-- Shipping -->
{{-- @include('theme.default.components.services') --}}

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection