@extends('theme.newtheme.website')

@section('content')
<!-- Breadcrumbs -->
<div class="page-title__banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-5">
                <div class="page-title__content">
                    <h5>User</h5>
                    <h6>Overview</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
	
<!-- Login Screen -->
<section id="auth"> 
	<div class="container">
		<div class="row">
		   <div class="col-lg-3 col-md-4">
			  <div class="customer_dashboard">
				 @include('theme.default.customer.my_account.menu')
			  </div>
		   </div>
		   <div class="col-lg-9 col-md-8">
				<div class="dashboard_content">
					<div class="card">
						<div class="card-header">
						   <h4>{{ _lang('Account Information') }}</h4>
						</div>
						<div class="card-body">
						   <div class="form-group"><i class="fa fa-user"></i> {{ _lang('Name') }}: <strong>{{ Auth::user()->name }}</strong></div>
						   <div class="form-group"><i class="fa fa-envelope"></i> {{ _lang('Email') }}: <strong>{{ Auth::user()->email }}</strong></div>
						   <div class="form-group"><i class="fa fa-phone"></i> {{ _lang('Phone') }}: <strong>{{ Auth::user()->phone }}</strong></div>
						</div>
					</div>
				</div>
		   </div>
		</div>
	</div>
</section>
<!--/ End Login Screen -->
		

@endsection
