<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your page description here" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-responsive.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/camera.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.bxslider.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="{{ asset('css/color/default.css')}}" rel="stylesheet" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('css/ico/apple-touch-icon-144-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('css/ico/apple-touch-icon-114-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('css/ico/apple-touch-icon-72-precomposed.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('css/ico/apple-touch-icon-57-precomposed.png')}}" />
    <link rel="shortcut icon" href="{{ asset('css/ico/favicon.png')}}" />
    </head>