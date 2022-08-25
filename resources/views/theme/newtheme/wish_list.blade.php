@extends('theme.newtheme.website')

@section('content')
<!-- Breadcrumbs -->
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="page-title__content">
                    <h5>User</h5>
                    <a href="{{ url('/shop') }}">Wish List</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

	
<!-- Wish List -->
<div class="wish-list section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<table class="table wish-list-summery">
					<thead>
						<tr class="main-hading">
							<th>{{ _lang('IMAGE') }}</th>
							<th>{{ _lang('PRODUCT') }}</th>
							<th class="text-center">{{ _lang('ACTION') }}</th>
						</tr>
					</thead>
					<tbody>
						@if(auth()->user()->wishlist->count() == 0)
							<tr>
								<td colspan="3" class="text-center">{{ _lang('No product in wishlist!') }}</td>
							</tr>
						@endif


						@foreach(auth()->user()->wishlist as $product)
							<tr>
								<td class="image" data-title="No">
									<img src="{{ asset('storage/app/'. $product->image->file_path) }}" alt="#">
								</td>
								<td class="product-des" data-title="Description">
									<p class="product-name">
										<a href="{{ url('product/'.$product->slug) }}">{{ $product->translation->name }}</a>
									</p>
								</td>
								<td class="text-center">
									<a href="{{ url('add_to_cart/'.$product->id) }}" class="btn add_to_cart" data-type="{{ $product->product_type }}">{{ _lang('Add to Cart') }}</a>
									<a href="{{ url('remove_wishlist/'.$product->id) }}" class="btn remove_item">{{ _lang('Remove') }}</a>
								</td>
							</tr>					
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--/ End Wish List -->

		
@include('theme.default.components.services')

@endsection

@section('js-script')
<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection