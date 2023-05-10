<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page-title')</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
</head>


<body>
    @include('partials.header')
    <main>
        <div class="container-upper">
            <img src="{{ Vite::asset('resources/img/dc-comici.jpg') }}" alt="Logo DC">
        </div>
        <div class="container-products">
            <div class="products">
                <div class="card">
                    @foreach ($fumetti as $fumetto)
                        <img src="{{ $fumetto['thumb'] }}" alt="Digital comics">
                        <h3>{{ $fumetto['series'] }}</h3>
                </div>
            </div>
        </div>
        <div class="container-mid">
            <div class="container-items">
                <div class="first-item">
                    @endforeach

                </div>
            </div>
        </div>

    </main>

    @include('partials.footer')


</body>

</html>
