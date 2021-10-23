
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    
   <link rel="stylesheet" href="/css/app.css"> 
    <script src="/js/app.js"defer></script>
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/N.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/N.png') }}">
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between ">
        <head>
    @include('partials.nav')
    </head>
    <main class="py-4">
    @yield('content')
</main>
<footer class="bg-white text-center text-black-50 py-3 shadow">
    {{ config('app.name')}} | Copyright @ {{date('Y')}}

</footer>
</div>

</body>
</html>