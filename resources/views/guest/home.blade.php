<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DeliveBoo</title>
    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles: questa parte di css va' lasciata qui, in quanto fa parte di questa specifica pagina dall'inizio -->
    <style>
        html,
        body {
            background-color: #00ccbd;
            background-repeat: no-repeat;
            color: #636b6f;
            font-family: 'Montserrat', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

    </style>
</head>

<body id="home_body" style="background-color: rgba(0, 0, 0, 0)">
    @include('layouts.partials.header')

    {{-- TESTATA DELLA PAGINA --}}
    <div class="container home_header">
        <img id="logo" src="{{ asset('img/deliveboo_logo_grande.png') }}" alt="">
        <a href="{{ route('restaurants.index') }}"><button class="restaurants_btn" type="button"
                style="outline: none">EFFETTUA UN ORDINE</button></a>
        <img class="gif" src="{{ asset('img/deliveroo.gif') }}" alt="">
    </div>

    {{-- Sezione di DELIVEROO --}}

    <section class="selection container mt-5">
        <div class="content">
            <div class="comfort-food">
                <div class="content-img">
                    <h3>Comfort food</h3>
                </div>
            </div>
            <div class="dolci-dessert">
                <div class="content-img">
                    <h3>Dolci e dessert</h3>
                </div>
            </div>
            <div class="perfect-to-share">
                <div class="content-img">
                    <h3>Perfetti da condividere</h3>
                </div>
            </div>
            <div class="exclusive-deliveroo">
                <div class="content-img">
                    <h3>Esclusiva DeliveBoo</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Section news --}}
    <section class="news container mt-5">
        <h2 class="mb-4">Novità dalla nostra cucina</h2>
        <div class="work-news card mb-5">
            <div class="img-container">
                <img src="{{ asset('img/news-work-sushi.jpg') }}" alt="News Work">
            </div>
            <div class="text-container news">
                <h4>DeliveBoo per le Aziende</h4>
                <p>Clienti o colleghi affamati? il nostro team Corporate ti può aiutare.</p>
                <a href="#" click.prevent="" class="btn btn-primary">Contattaci</a>
            </div>
        </div>
        <div class="work-app card mb-5">
            <div class="text-container app">
                <h4>Hai già la nostra app?</h4>
                <p>Scaricala ora - disponibile su Apple store e Google Play!</p>
                <img style="cursor: pointer;" src="{{ asset('img/app-store.png') }}">
                <img style="cursor: pointer;" src="{{ asset('img/google-play.png') }}" alt="Google-play">
            </div>
            <div class="img-container">
                <img src="{{ asset('img/app.jpg') }}" alt="News Work">
            </div>
        </div>
    </section>

    {{-- Section work with Deliveroo --}}
    <section class="work container mb-5">
        <h2>Lavora con DeliveBoo</h2>
        <div class="row row-cols-1 row-cols-md-3 ciao">
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('img/rider.jpg') }}" alt="Lavora con noi">
                    <div class="card-body rider">
                        <h5 class="card-title">Rider</h5>
                        <p class="card-text">Diventa un rider: flessibilità, ottimi guadagni e un mondo di vantaggi per
                            te.</p>
                        <a href="#" click.prevent="" class="btn btn-primary">Unisciti a noi</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('img/ristoranti.jpg') }}" alt="Diventa partner">
                    <div class="card-body ristoranti">
                        <h5 class="card-title">Ristoranti</h5>
                        <p class="card-text">Diventa partner di DeliveBoo e raggiungi sempre più clienti. Ci occupiamo
                            noi della consegna, così che la tua unica preoccupazione sia continuare a preparare il
                            miglior cibo.</p>
                        <a href="#" click.prevent="" class="btn btn-primary">Diventa nostro partner</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="{{ asset('img/lavoro.jpg') }}" alt="Lavora con noi">
                    <div class="card-body lavoro">
                        <h5 class="card-title">Lavora con noi</h5>
                        <p class="card-text">La nostra missione è trasformare il modo in cui le persone mangiano. È un
                            obiettivo ambizioso, come noi, e ci servono persone che ci aiutino a raggiungerlo.</p>
                        <a href="#" click.prevent="" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.footer')
</body>

</html>
