@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 style="margin-top: 10px; font-weight: bold">Descrizione del piatto</h1>
                
                <div class="card card_description" style="width: 18rem; margin: 30px 0;">
                    <div class="card-header">
                        <h3>{{ $plates->nome_piatto }}</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $plates->descrizione }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection