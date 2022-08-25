@extends('theme.newtheme.website')

@section('content')
<!-- Breadcrumbs -->
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
				<div class="page-title__content">
                    <h5>Essentials Coolers</h5>
                    <h3><span>Order Placed<span></h3>
                    <p>Keep your essentials fresh.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
	<div class="container">
		<div class="row"> 

			<div class="col-lg-12">	
				<div class="order-success">
					<i class="ti-check-box"></i>
					<h2>{{ _lang('Your Order has been Placed Sucessfully') }}</h2>
					<p>{{ _lang('Your Order ID') }}#: {{ $order->id }}</p>
					<a href="{{ url('/shop') }}" class="btn-back-to-store">{{ _lang('Back to Store') }}</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Checkout -->

@endsection

