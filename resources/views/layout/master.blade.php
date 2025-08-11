<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
        {{-- header --}}
        @include('partials.header')

        {{-- jumbotron --}}
        @yield('jumbotron')
    
        {{-- content --}}
        @include('pages.home.content')

        {{-- blue-list --}}
        @include('pages.home.blue-list')

        {{-- pre-footer --}}
        @include('partials.prefooter')
    
        {{-- footer --}}
        @include('partials.footer')
</body>
</html>