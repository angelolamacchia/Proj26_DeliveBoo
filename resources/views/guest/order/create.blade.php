@extends('layouts.app')

@section('content')
    <div class="container payment_container" id='root'>
        <div class="row">
            <div class="col-12 form_order">
                <h2>Effettua il pagamento</h2>
                <form action="{{ route('checkout.store', @orderSaved) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror"
                            placeholder="Inserisci il tuo nome" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Cognome</label>
                        <input type="text" name="cognome" class="form-control @error('cognome') is-invalid @enderror"
                            placeholder="Inserisci il tuo cognome" value="{{ old('cognome') }}" required>
                        @error('cognome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Indirizzo</label>
                        <input type="text" name="indirizzo" class="form-control @error('indirizzo') is-invalid @enderror"
                            placeholder="Inserisci il tuo indirizzo" value="{{ old('indirizzo') }}" required>
                        @error('indirizzo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="mail" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Inserisci la tua mail" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Numero di telefono</label>
                        <input type="text" name="numero_telefono"
                            class="form-control @error('numero_telefono') is-invalid @enderror"
                            placeholder="Inserisci il tuo numero di telefono" value="{{ old('numero_telefono') }}"
                            required>
                        @error('numero_telefono')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info" class="form-control @error('info') is-invalid @enderror" rows="10"
                            placeholder="Hai delle esigenze particolari?">{{ old('info') }}</textarea>
                        @error('info')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group" style="display: none">
                        <input type="number" name="totale" class="form-control" step="any" :value="orderTotal">
                    </div>

                    <div class="form-group" style="display: none">
                        <div v-for='(id, index) in ids'>
                            <div class="form-check">
                                <input type="checkbox" name='ids[]' :value='ids[index]' checked>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-check-circle"></i> Conferma ordine
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" v-for='element in orderSaved'>
            <div class="col-12">
                <p style="margin: 0; text-align:center"><strong>@{{ element . nome_piatto }}</strong>,
                    @{{ element . prezzo }} &euro;</p>
            </div>
        </div>
        <h2 style="text-align:center"><strong>Totale:</strong> @{{ orderTotal }} &euro;</h2>
    </div>

@endsection
