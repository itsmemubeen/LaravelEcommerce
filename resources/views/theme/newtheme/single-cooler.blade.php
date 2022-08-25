@extends('theme.newtheme.website')

@section('content')
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
				<div class="page-title__content">
                    <h5>Essentials Coolers</h5>
                    <h3><span>Shop<span></h3>
                    <p>Keep your essentials fresh.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<div class="custom-container">
    <div class="row justify-content-center mar-y">
        <div class="col-12 col-lg-6">
            <div class="section-heading text-center">
                <h2 class="text-uppercase">Our Essentials Coolers</h2>
            </div>
        </div>
    </div>
    <section class="collection-shop mar-y">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="collection-slider__img">
                        <img src="{{ asset('storage/app/'. $productone->image->file_path) }}" alt="{{$productone->image->file_path}}" class="imgFluid">
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="collection-shop__content">
                        <a href="{{ url('product/'.$productone->slug) }}">
                            <h2 class="mb-0">{{ $productone->translation->name }}</h2>
                        </a>
                        <div class="singleProduct__review my-2">
                            <div>
                                    @php
                                    $count = $productone->reviews->count();
                                    $max = 0;
                                    $i = 0;
                                    @endphp
                                    @foreach ($productone->reviews as $c)
                                        @php 
                                            $max = $max+$productone->reviews[$i]->rating;
                                            $i++;
                                        @endphp
                                    @endforeach
                                    @for ($i =0; $i<$max/$count; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                                    {{ $max/$count .".0" }}
                            </div>
                            <span>{{ $productone->reviews->count() }} Reviews
                        </div>
                        {!! substr($productone->translation->description,0,100) !!}
                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6">
                                <ul class="perks">
                                    @foreach ($tagsone as $one)
                                        <li><i class="fa-solid fa-check"></i>{{ $one->name }}</li>
                                    @endforeach
                                </ul>
                                <ul class="singleProduct__social singleProduct__social--coolers">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="coolersPrice">
                                    @if($productone->special_price != '' || (int) $productone->special_price != 0 )
                                            <ins>{!! xss_clean(show_price($productone->special_price)) !!}</ins>
											<del>{!! xss_clean(show_price($productone->price)) !!}</del> 
										@else
											<span class="discount ">
                                                <ins>{!! xss_clean(show_price($productone->price)) !!}</ins>
                                            </span>
										@endif
                                </div>
                                <div class="singleProduct__quantity ">
                                    <p>Quantity</p>
                                    <div>
                                        <div class="singleProduct__quantityCounter singleProduct__quantityCounter--cooler">
                                            <button type="button"  class="btn-number quantity-right-minus-one" disabled="disabled" data-type="minus" data-field="quantity"><i class="fas fa-minus"></i></button>
                                            <input type="number" class="input-number-one" name="quantity" value="1">
                                            <button type="button"  class="btn-number quantity-right-plus-one" data-type="plus" data-field="quantity"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <a href="{{ url('add_to_cart/'.$productone->id) }}" data-type="{{ $productone->product_type }}" class="themeBtn add_to_cart"><i class="bx bx-cart-alt"></i>{{ _lang('Add to Cart') }}</a>
                                    </div>
                                    <a href="cart.php" class="themeBtn">Add To Wishlist</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="collection-shopWrapper">
    <div class="custom-container ">
        <section class=" collection-shop mar-y">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="collection-shop__content">
                            <a href="{{ url('product/'.$producttwo->slug) }}">
                                <h2 class="mb-0">{{ $producttwo->translation->name }}</h2>
                            </a>
                            <div class="singleProduct__review my-2">
                                <div>
                                    @php
                                    $count = $producttwo->reviews->count();
                                    $max = 0;
                                    $i = 0;
                                    @endphp
                                    @foreach ($producttwo->reviews as $c)
                                        @php 
                                            $max = $max+$producttwo->reviews[$i]->rating;
                                            $i++;
                                        @endphp
                                    @endforeach
                                    @for ($i =0; $i<$max/$count; $i++)
                                    <i class="fas fa-star"></i>
                                    @endfor
                                    {{ $max/$count .".0" }}
                                </div>
                            <span>{{ $producttwo->reviews->count() }} Reviews</span>
                            </div>
                            {!! substr($producttwo->translation->description,0,100) !!}
                            <div class="row no-gutters">
                                <div class="col-12 col-lg-6">
                                    <ul class="perks">
                                        @foreach ($tagstwo as $two)
                                        <li><i class="fa-solid fa-check"></i>{{ $two->name }}</li>
                                        @endforeach
                                    </ul>
                                    <ul class="singleProduct__social singleProduct__social--coolers">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="coolersPrice">
                                        @if($producttwo->special_price != '' || (int) $producttwo->special_price != 0 )
                                                <ins>{!! xss_clean(show_price($producttwo->special_price)) !!}</ins>
                                                <del>{!! xss_clean(show_price($producttwo->price)) !!}</del> 
                                            @else
                                                <ins>{!! xss_clean(show_price($producttwo->price)) !!}</ins>
                                            @endif
                                    </div>
                                    <div class="singleProduct__quantity ">
                                        <p>Quantity</p>
                                        <div>
                                            <div class="singleProduct__quantityCounter singleProduct__quantityCounter--white">
                                                <button type="button"  class="btn-number quantity-right-minus-two" disabled="disabled" data-type="minus" data-field="quantity"><i class="fas fa-minus"></i></button>
                                            <input type="number" class="input-number-two" name="quantity" value="1">
                                            <button type="button"  class="btn-number quantity-right-plus-two" data-type="plus" data-field="quantity"><i class="fas fa-plus"></i></button>
                                            </div>
                                            <a href="{{ url('add_to_cart/'.$producttwo->id) }}" data-type="{{ $producttwo->product_type }}" class="themeBtn add_to_cart"><i class="bx bx-cart-alt"></i>{{ _lang('Add to Cart') }}</a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4">
                                            <label for="file" class="uploadFile">
                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                                Upload a picture
                                                <input type="file" id="file">
                                            </label>
                                            <a href="#" class="themeBtn themeBtn--outline">Buy it now</a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="collection-slider__img">
                            <img src="{{ asset('storage/app/'. $producttwo->image->file_path) }}" alt="{{$producttwo->image->file_path}}" class="imgFluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection

@section('js-script')
<script src="{{ asset('public/theme/newtheme/js/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('public/theme/newtheme/js/product-options.js?v=1.1') }}"></script>
<script src="{{ asset('public/theme/newtheme/js/cart.js?v=1.1') }}"></script>
@endsection