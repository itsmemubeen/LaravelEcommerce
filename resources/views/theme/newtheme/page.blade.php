@extends('theme.newtheme.website')

@section('content')

<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="page-title__content">
                    <ul class="bread-list">
						<h4>{{ _lang('Home') }}<i class="ti-arrow-right"></i></h4>
						<h5>{{ $page->translation->title }}</h5>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

	
<!-- Wish List -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p>{!! xss_clean($page->translation->body) !!}</p>
			</div>
		</div>
	</div>
</div>
<!--/ End Wish List -->

		
@include('theme.newtheme.components.services')

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection