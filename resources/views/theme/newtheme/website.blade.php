<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title Tag  -->
    <title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>

    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : get_option('meta_keywords') }}"/>
    <meta name="description" content="{{ isset($meta_description) ? $meta_description : get_option('meta_description') }}"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ get_favicon() }}">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	<link href="{{ asset('public/theme/newtheme/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/newtheme/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/newtheme/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/newtheme/css/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/theme/newtheme/css/slick-theme.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
    <link href="{{ asset('public/theme/newtheme/css/style.css') }}" rel="stylesheet">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/bootstrap.css') }}">
	
	<link rel="stylesheet" href="{{ asset('public/theme/default/style.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/default/css/responsive.css?v=1.1') }}">  

    @include('theme.default.components.custom_styles') 
	@include('layouts.others.languages')

    <script type="text/javascript">
    	var _url = "{{ url('') }}";
    </script>
    
</head>

<body>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="about-us.php">About</a>
        <li><a href="{{ url('/shop') }}">Shop</a></li>
        <li><a href="blogs.php">Blogs</a></li>

    </div>



    <header class="header">
        <div class="container">
            <div class="header__main">
                <a href="{{ url('') }}" class="header__logo">
                    <img src="{{ get_logo() }}" alt="logo" class="imgFluid">
                </a>
                <ul class="header__nav">
                    <li>
                        <form class="search-bar">
                            <input type="text" placeholder="Search" class="search__input">
                            <button type="button" class="search__btn">
                                <i class='bx bx-search-alt-2'></i>
                            </button>
                        </form>
                    </li>
                    @if(! Auth::check())
									<li><i class="ti-lock"></i><a href="{{ url('/sign_in') }}"><i class="far fa-user"></i></a></li>
								@else
									<li><i class="ti-user"></i> <a href="{{ url('/my_account') }}"><i class="far fa-user"></i></a></li>
									<li><i class="ti-power-off"></i><a href="{{ url('/sign_out') }}"><i class="fas fa-sign-out"></i></a></li>
								@endif
                    <li>@include('theme.newtheme.components.mini-cart')</li>
                    <li><a href="javascript:void(0)" onclick="openNav()"><i class='bx bx-menu-alt-right'></i></a></li>
                </ul>
            </div>
        </div>
    </header>
	
	@yield('content')	
	<section class="Shipping mar-y">
		<div class="shipping">
			<div class="container">
				<ul class="shipping-content">
					<li>
						<img src="{{ asset('public/theme/newtheme/images/shipping-img-1.png') }}" alt="image" class="imgFluid">
						<h6>SHIPPING & RETURN</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</li>
					<li>
						<img src="{{ asset('public/theme/newtheme/images/shipping-img-2.png') }}" alt="image" class="imgFluid">
						<h6>SHIPPING & RETURN</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</li>
					<li>
						<img src="{{ asset('public/theme/newtheme/images/shipping-img-3.png') }}" alt="image" class="imgFluid">
						<h6>SHIPPING & RETURN</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3">
					<div class="single-footer links">
						<h4>{{ _lang('My Account') }}</h4>
						<!-- Single Widget -->
						<ul>
							<li><a href="{{ url('/my_account/overview') }}">{{ _lang('Account Overview') }}</a></li>
							<li><a href="{{ url('/my_account/orders') }}">{{ _lang('My Orders') }}</a></li>
							<li><a href="{{ url('/my_account/downloads') }}">{{ _lang('My Downloads') }}</a></li>
							<li><a href="{{ url('/my_account/reviews') }}">{{ _lang('My Reviews') }}</a></li>
							@auth
								<li><a href="{{ url('/logout') }}">{{ _lang('Logout') }}</a></li>
							@endauth
						</ul>
						<!-- End Single Widget -->
					</div>
				</div>
				<div class="col-12 col-lg-2">
					<div class="Information-links">
						<div class="single-footer links">
							<h4>{{ get_trans_option('footer_menu_1_title') }}</h4>
							{!! xss_clean(show_navigation(get_option('footer_menu_1'))) !!}
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="Information-links">
						<div class="single-footer links">
							<h4>{{ get_trans_option('footer_menu_2_title') }}</h4>
							{!! xss_clean(show_navigation(get_option('footer_menu_2'))) !!}
						</div>
					</div>
				</div>
				
				<div class="col-12 col-lg-4">
					<div class="good-stuff Information-links">
						<h4>The good stuff in your inbox</h4>
						<P class="mt-4">News & updates from JanierStore.
							<span class="d-block">No spam, we promise.</span>
						</P>
					</div>
					<div class="subscribe-form">
						<form action="#">
							<input type="text" placeholder="Email Address">
							<button>sign up</button>
						</form>
					</div>
					<div class="footer-social__icons">
						<ul>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							<li><a href="#"><i class='bx bx-globe'></i></a></li>
							<li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__coprightWrapper">
			<div class="container">
				<div class="footer__copright">
					<p>Essentials Cooler. Copyright 2022, All Right Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="{{ asset('public/theme/newtheme/js/jquery.js') }}"></script>
	<script src="{{ asset('public/theme/newtheme/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/theme/newtheme/js/wow.min.js') }}"></script>
	<script src="{{ asset('public/theme/newtheme/js/slick.js') }}"></script>
	<!-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> -->
	<script src="{{ asset('public/theme/newtheme/js/app.js') }}"></script>
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
	<script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('public/theme/default/js/easing.js') }}"></script>

	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
	
	<script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>

	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
	
	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>
	<script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
	

	<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	</script>
		@yield('js-script')
	</body>
</html>