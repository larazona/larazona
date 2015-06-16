<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('css/styles.css') }}" />
</head>
<body>
@include('partials.tracking')
<div class="container">
    @include('partials.header')
    @yield('content')
</div>
@include('partials.footer')