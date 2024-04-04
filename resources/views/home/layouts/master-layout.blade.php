<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Mobilesentrix - @yield("title")</title>
  <!-- css link -->
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css')}}" />
  <!--Google Fonts-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  
  @if (Route::currentRouteName() == 'user.account')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  @endif
  
</head>


<body>

    @include("home.layouts.mobile-menu")

    @include("home.layouts.header")

    @if (Route::currentRouteName() == 'home')
      @include("home.layouts.hero-section")
    @endif

    @yield("main-content")

    @include("home.layouts.footer")
