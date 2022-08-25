@extends('theme.newtheme.website')

@section('content')
<!-- Breadcrumbs -->
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
				<div class="page-title__content">
                    <h5>Essentials Coolers</h5>
                    <h3><span>Brands<span></h3>
                    <p>Keep your essentials fresh.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

	
<!-- Wish List -->
<div class="brands section">
	<div class="container">
		<div class="row">
			@foreach($brands as $brand)
				<div class="col-md-3">
					<div class="single-brand">
						<a href="{{ url('/brands/'.$brand->slug) }}">
							@if(isset($brand->logo->pivot))
								<img src="{{ asset('storage/app/'. $brand->logo->file_path) }}" alt="#">
							@else
								<img src="{{ asset('public/theme/default/images/no-brand-image.png') }}" alt="#">
							@endif
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
<!--/ End Wish List -->

@include('theme.newtheme.components.services')

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection