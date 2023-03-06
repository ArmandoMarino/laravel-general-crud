<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | @yield('title') </title>
    {{-- FONTAWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- FONT --}}


    @yield('cdns')

    @vite('resources/js/app.js')
    
</head>
<body>
<header>
    {{-- navbar --}}
    @include('includes.nav')
</header>
<main>
    {{-- main content --}}
    @yield('content')
</main>
<footer>
    {{-- footer --}}
    @include('includes.footer')
</footer>
    {{-- scripts --}}
    @yield('scripts')
</body>
</html>