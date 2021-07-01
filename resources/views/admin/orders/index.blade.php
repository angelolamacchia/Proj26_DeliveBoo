@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid" id="root">
        <div class="row">
            <div class="restaurant_orders_container" style="{{($order_details == null ? 'display:none;' : null)}}">
                <div class="restaurant_orders">
                    <h2>I tuoi ordini</h2>
                    @foreach ($order_details as $detail)
                        <div class="card col-12">
                            <h3>Nome cliente: {{$detail['name']}} {{$detail['surname']}}</h3>
                            @foreach ($orders as $index => $order)
                                <ul style="{{(!($detail['order_id'] == $order->order_id)) ? 'display:none;' : null}}">
                                    {{-- {{(Request::route()->getName() == 'pagina-home') ? 'active' : null}} --}}
                                    <li style="font-weight: bold"><i class="fas fa-circle"></i> {{$order->nome_piatto}} | {{$order->prezzo}}€</li>
                                </ul>
                            @endforeach
                            <ul>
                                <li>Indirizzo: {{$detail['indirizzo']}}</li>
                                <li>Totale: {{$detail['total']}}€</li>
                                <li>Info: {{$detail['info']}}</li>
                            </ul>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection