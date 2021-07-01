@extends('layouts.dashboard')

@section('content')
    <div style="height: 100%" class="admin_plates_container restaurants_list_container plates_list">
        <h1 style=" text-align: center">I TUOI PIATTI</h1>

        <a href="{{ route('plates.create') }}">
            <button>Aggiungi un piatto</button>
        </a>

        <div class="container">
            <div class="row">
                @foreach ($plates as $plate)
                    <div class="wrapper_restaurant col-12 col-sm-6 col-lg-4">
                        <div class="single_restaurant single_plate" id="plate_admin">
                            <div class="card-body">
                                <h3 class="card-title">{{ $plate->nome_piatto }}</h3>
                                <p class="card-text"><strong>Ingredienti:</strong> {{ $plate->ingredienti }}</p>
                                <p class="card-text"><strong>Prezzo:</strong> {{ $plate->prezzo }} &euro;</p>
                                <p class="card-text"><strong>Visibilità:</strong>
                                    {{ $plate->visibilita == 1 ? 'Si' : 'No' }}
                                </p>
                            </div>
                            <div id="button_container">
                                <span>
                                    <a href="{{ route('admin.plates.show', ['id' => $plate->id]) }}">
                                        <button>Descrizione</button>
                                    </a>
                                </span>
                                
                                <span>
                                    <a href="{{ route('admin.plates.edit', ['id' => $plate->id]) }}" class="m_rgt_lft">
                                        <button class="modify_button">Modifica</button>
                                    </a>
                                </span>
                                
                                <span id="delete_button">
                                    <form class="text-center" action="{{ route('plates.destroy', $plate->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="cancella_scntr">
                                            <a class="" href="">Cancella</a>
                                        </button>
                                    </form>
                                </span>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
