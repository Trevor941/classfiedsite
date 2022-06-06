<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Classfieds | @yield('page-title') - Classified Ads and Listing Project</title>
    @include('layouts.classfied-partials._css')
    
</head>
<body>

    <header id="header-wrap">
        @include('layouts.classfied-partials._topbar')
        @include('layouts.classfied-partials._navbar')
    </header>
    @include('layouts.classfied-partials._page-header')
   @yield('page-body')
   @include('layouts.classfied-partials._navbar')
   @include('layouts.classfied-partials._footer')
   @include('layouts.classfied-partials._uparrow')
   @include('layouts.classfied-partials._preloader')

   @include('layouts.classfied-partials._scripts')  
</body>


</html>
