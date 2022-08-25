@extends('theme.newtheme.website')

@section('content')
<!-- Breadcrumbs -->
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
				<div class="page-title__content">
                    <h5>Essentials Coolers</h5>
                    <h3><span>Cart<span></h3>
                    <p>Keep your essentials fresh.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
	
<!-- Shopping Cart -->
<div class="shopping-cart section">
	@include('theme.newtheme.components.cart-body')
</div>
<!--/ End Shopping Cart -->
		
@include('theme.newtheme.components.services')

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection