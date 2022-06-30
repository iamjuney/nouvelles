<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Nouvelles</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">

    <!-- preloader
    ================================================== -->
    <x-preloader />


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap @if(Route::is('home')) ss-home @endif">

        <!-- # site header
        ================================================== -->
        <x-header />
        <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">

            {{ $slot }}

        </section>
        <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <x-footer/>
        <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
