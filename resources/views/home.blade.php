<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        @include('partials.header')

    </header>

    <main>
        <div class="container-upper">
            <img src="{{ Vite::asset('resources/img/dc-comici.jpg') }}" alt="Logo DC">
        </div>
        <div class="container d-flex">
            @foreach ($fumetti as $fumetto)
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="{{ $fumetto['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text fs-1  ">{{ $fumetto['series'] }}</p>
                            </div>
                        </div>
            @endforeach
        </div>


        </div>
        </div>
        <div class="container-mid">
            <div class="container-items">
                <div class="first-item">


                </div>
            </div>
        </div>


    </main>

    <footer>@include('partials.footer')</footer>






</body>

</html>
