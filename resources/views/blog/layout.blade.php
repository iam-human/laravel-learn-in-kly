<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>KLY | @yield('title')</title>
<meta name="description" content="Free Bootstrap Theme by uicookies.com">
<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
<link rel="stylesheet" href="{{ asset('/css/styles-merged.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.min.css') }}">
<!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('blog.nav')

@yield('body')

@include('blog.footer')

@include('blog.modal')

<script src="{{ asset('/js/scripts.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/custom.min.js') }}" type="text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="5e54c302f4a990a9aaebcdcb-|49" defer=""></script></body>

<!-- Mirrored from uicookies.com/demo/theme/inspire/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 03:42:14 GMT -->
</html>