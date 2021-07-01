@extends('layouts.dashboard')

@section('content')
    <div class="admin_plates_container create_container description_container">
        <div class="ms_container">
            <h1>Descrizione del piatto</h1>
            <div class="ciao">
                <h3><strong>Nome del piatto:</strong> {{ $plate->nome_piatto }}</h3>
                <p class="description"><strong>Descrizione:</strong> {{ $plate->descrizione }}</li>
            </div>
        </div>
    </div>
@endsection