@extends('layouts.app')

@section('content')



    <div class="container payment_card" id="root">
        <form id="payment-form" action="{{ route('payment') }}" method="post">
            @csrf
            @method('POST')
            <div>
                <div id="dropin-container"></div>
            </div>
            
            <div>
                <span class="btn btn-outline-secondary btn-total" for="amount">Totale: @{{orderTotal}} €</span>
                <button type="submit" id="invia" class="btn btn-primary btn-pay">Paga ora</button>
                <input type="hidden" id="nonce" name="payment_method_nonce"/>
                <input type="hidden" :value="orderTotal" id="amount" name="amount"/>
            </div>

        </form>
    </div>



@endsection


@section('script')


    <script>
    $(document).ready(function(){

        const form = document.getElementById('payment-form');
        const clientToken = '{{ $clientToken }}'
        
        braintree.dropin.create({ 
                authorization: clientToken, 
                container: '#dropin-container' 
        }, function (createErr, instance) { 
        
            $('#payment-form').on('submit', function(event ){

                event.preventDefault() 
                instance.requestPaymentMethod((requestPaymentMethodErr, payload) => { 
                    if (requestPaymentMethodErr) {
                        console.error(requestPaymentMethodErr);
                    }
                    document.getElementById('nonce').value = payload.nonce; 

                    form.submit(); 
                });
            

            })
        
        });
    });
    </script>

@endsection

