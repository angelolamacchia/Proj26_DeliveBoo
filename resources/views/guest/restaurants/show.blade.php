@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Menu del ristorante visto dai guest</h1>
                @foreach ($plates as $plate)
                    <div class="card" style="width: 18rem; margin: 30px 0;">
                        <div class="card-header">
                            <h3>{{ $plate->nome_piatto }}</h3>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Ingredienti: {{ $plate->ingredienti }}</li>
                            <li class="list-group-item">Prezzo: {{ $plate->prezzo }}</li>
                            <li class="list-group-item">
                                <a class="btn btn-primary" href="{{route('plates.show', ['slug'=>$plate->slug, 'id'=>$plate->user_id])}}">
                                    {{$plate->nome_piatto}}
                                </a>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
