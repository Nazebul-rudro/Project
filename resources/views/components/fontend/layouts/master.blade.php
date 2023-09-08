<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('ui/fontend') }}/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>{{ $title ?? "Not Found" }}</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/linearicons.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/themify-icons.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/nice-select.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/nouislider.min.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('ui/fontend') }}/css/main.css">
</head>

<body>
<x-fontend.layouts.partials.header/>



{{ $slot }}




	<x-fontend.layouts.partials.footer/>

	<script src="{{ asset('ui/fontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('ui/fontend') }}/js/vendor/bootstrap.min.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/jquery.nice-select.min.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/jquery.sticky.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/nouislider.min.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/countdown.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('ui/fontend') }}/js/gmaps.min.js"></script>
	<script src="{{ asset('ui/fontend') }}/js/main.js"></script>
</body>

</html>