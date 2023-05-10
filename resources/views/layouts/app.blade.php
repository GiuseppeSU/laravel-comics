<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page-title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
</head>


<body>
    @include('partials.header')


    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')


</body>

</html>
