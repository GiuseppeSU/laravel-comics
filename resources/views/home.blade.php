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
        <div class="my_color">
            <div class="container w-75">
                <div class="row  ">
                    @foreach ($fumetti as $fumetto)
                        <div class="col-2">
                            <div class="card h-50 text-center text-light mt-5">
                                <img src="{{ $fumetto['thumb'] }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text fs-5 ">{{ $fumetto['series'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">

                <button class="btn btn-primary text-white text-center mb-3">Load More</button>
            </div>
        </div>

        <div class="my_color2 d-flex justify-content-center align-items-center">

            <div class="container w-75 m-auto">
                <div class="row ms-5">
                    <div class="col">
                        <img class="w-25" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                            alt="">
                        <span class="text-white ms-2 my_font">DIGITAL COMICS</span>
                    </div>

                    <div class="col">
                        <img class="w-25" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                            alt="">
                        <span class="text-white ms-2 my_font">DC MERCHANDISE</span>
                    </div>


                    <div class="col">
                        <img class="w-25" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                            alt="">
                        <span class="text-white ms-2 my_font">SUBSCRIPTIONS</span>
                    </div>


                    <div class="col-2">
                        <img class="w-25" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                            alt="">
                        <span class="text-white ms-2 my_font">COMIC SHOP LOCATION</span>
                    </div>

                    <div class="col-3">
                        <img class="w-25 ms-5 mt-2" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                            alt="">
                        <span class="text-white ms-2 my_font">POWER VISA</span>
                    </div>
                </div>
            </div>
        </div>



    </main>

    <footer>@include('partials.footer')</footer>






</body>

</html>
