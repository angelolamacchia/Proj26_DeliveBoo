@extends('layouts.dashboard')

@section('content')
    <main id="corpo_admin_profile">
        <h1 style="text-align: center">IL TUO PROFILO</h1>
        <div class="container banner_profile">
            <div class="img_wrapper img-rounded">
                <img src="{{asset('storage/' . $user->img_logo) }}" alt="">
            </div>
            <img class="banner" src="{{asset('storage/' . $user->img_banner) }}" alt="">
        </div>
        <div class="your_profile text-center">
            <div class="datas container text-left">
                <p><strong>Nome della tua attività:</strong> {{$user->nome_attivita}}</p>
                <p class="m_top"><strong>Indirizzo:</strong> {{$user->indirizzo}}</p>
                <p><strong>Numero di telefono:</strong> {{$user->numero_telefono}}</p>
                <p>
                    <strong>Tipo di cucina:</strong> 
                    @foreach ($tags as $tag)
                    <span>{{$tag->cucina}} </span>
                    @endforeach
                </p>
                   
                <a class="btn btn-primary" href="{{ route('restaurant.edit', $user) }}">Modifica il profilo</a>
            </div>
        </div>
    </main>
@endsection
