<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Bread Of House Services - Overseas Employment Agency" />
    <meta name=”keywords” content=" Bread Of House Services - Overseas Employment Agency">
    <meta name="description" content="Bread Of House Services - Overseas Employment Agency" />
    <meta name="author" content="Bread Of House Services - Overseas Employment Agency" />
    <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Bread Of House Services - Overseas Employment Agency</title>

    <link rel="shortcut icon" href="{{ asset('data/company/logo.jpg') }}" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Bread Of House Services - Overseas Employment Agency" />
    <meta property="og:description " content="Bread Of House Services - Overseas Employment Agency" />
    <meta property="og:image" content="{{ asset('data/company/logo.jpg') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{ asset('assets/revolution/css/rs6.css') }}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/megamenu.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

</head>

<body>
    <div class="page">
        @include('layouts.menu')

        <div class="site-main">
            @yield('content')
        </div>

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/numinate.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-isotope.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/slider.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/rs6.min.js') }}"></script>
    
    
</body>

</html>
