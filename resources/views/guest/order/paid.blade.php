@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column justify-content-center">
        <h2 class="text-center mt-5">Grazie per l'ordine! Tutto quello che hai ordinato ti arriverà tra: <strong>30</strong> minuti</h2>
        <div class="row">
            <div class="col text-center mt-5 mb-5">
                <img src="{{ asset('img/payment/paid.png') }}" alt="">
            </div>
        </div>
        <a class="btn btn-warning mx-auto mb-5" href="{{route('guest.home')}}">Torna alla Home</a>
    </div>
@endsection