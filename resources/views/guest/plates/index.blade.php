@extends('layouts.app')

@section('content')
    <div class="container-fluid restaurants_list_container" style="position: relative" id='root'>
        <h1 style=" text-align: center">FAI IL TUO ORDINE</h1>
        <div class="container text-center">

            {{-- Scontrino --}}
            <div :style="{display: displayCart}" style="margin-top: 0;"
                class="scontrino_container" v-if='orders.length != 0'>
                <div style="margin: 0; margin-bottom: 35px" class="">
                    <div class="card scontrino">
                        <i @click="showCart()" class="fas fa-times"></i>
                        <h2 style="text-align: center">Il tuo carrello</h2>
                        <p><strong>Totale piatti:</strong> @{{orders.length}}</p>
                        <a href="{{ route('guest.order.create') }}" @click='saveOrder()'>
                            <button class="cancella_scntr checkout_btn" style="background-color: rgb(44, 155, 199);">
                                Vai al pagamento
                            </button>
                        </a>
                        <button class="cancella_scntr" style="margin-bottom: 5px;" @click='emptyCart()'>Svuota carrello</button>
                        <ul v-for='(order, index) in orders'>
                            <li><strong>@{{ order . nome_piatto }}</strong></li>
                            <li style="margin-bottom: 5px">@{{ order . prezzo }} &euro;</li>
                            <button class="cancella_scntr" @click='removeCart(index)'><i class="fas fa-times-circle"></i> Elimina piatto</button>
                            <div v-if='!(orders.length == 0)' class="separatore"></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div @click="showCart()" class="nav-item nav-link link_class" id="carrello_button">
                <div class="counter_cart" v-if='orders.length != 0'>
                    <p>@{{orders.length}}</p>
                </div>
                <i class="fas fa-shopping-cart"></i>
            </div>
            {{-- Fine scontrino --}}


            <div class="row">
                @foreach ($plates as $plate)
                    <div class="wrapper_plate col-12 col-sm-6 col-lg-4">
                        <div class="content_plate">
                            <div class="single_restaurant single_plate">
                                <div id="plate_id" class="card-body card_plate">
                                    <div class="card_plate_content">
                                        <h3 class="card-title">{{ $plate->nome_piatto }}</h3>
                                        <p class="card-text"><strong>Ingredienti:</strong> {{ $plate->ingredienti }}</p>
                                        <p class="card-text"><strong>Prezzo:</strong> {{ $plate->prezzo }} &euro;</p>
                                        <a href="{{ route('guest.plates.show', ['id' => $plate->id]) }}">
                                            <button>Descrizione</button>
                                        </a>
                                    </div>
                                    
                                    <button id="button_cart" class="modify_button" @click='addCart({{ json_encode($plate) }});'>
                                        Aggiungi al carrello
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection
