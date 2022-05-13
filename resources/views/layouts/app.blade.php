<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('page-title') - {{ config( 'app.name' ) }}</title>
    <meta property="og:title" content="@yield('page-title') - {{ config( 'app.name' ) }}">
    <meta property="og:site_name" content="{{ config( 'app.site_name' ) }}"/>
    <meta name="description" content="@yield('page-description') - {{ config( 'app.name' ) }}"/>
    <meta property="og:description" content="@yield('page-description') - {{ config( 'app.name' ) }}">
    <!----Style----->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
@if(url()->current() == route('projects.detail'))
    @include('layouts.header_detail')
@else
    @include('layouts.header')
@endif
{{--@include('layouts.header')--}}
@yield('content')
@include('layouts.footer')

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/all.js') }}"></script>
</body>
</html>
