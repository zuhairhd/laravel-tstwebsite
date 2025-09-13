<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
       <img src="{{ asset('images/ad01.png') }}" alt="ZJD" style="height:2  50px;">
       @yield('header')
       @include('layouts.sidemenu')
    </header>
     @yield('content')
    <footer>
       @yield('footer')
    </footer>

</body>
</html>