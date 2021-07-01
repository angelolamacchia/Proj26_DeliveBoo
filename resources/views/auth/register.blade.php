@extends('layouts.app')

@section('content')
<div class="container register_container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrati') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group col-12">
                            <label for="nome_attivita" class="col-form-label">{{ __('Nome attività') }}</label>

                            <div class="">
                                <input id="nome_attivita" type="text" class="form-control @error('nome_attivita') is-invalid @enderror" name="nome_attivita" value="{{ old('nome_attivita') }}" required autocomplete="nome_attivita" autofocus>

                                @error('nome_attivita')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="email" class="col-form-label">{{ __('E-Mail') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="indirizzo" class="col-form-label">{{ __('Indirizzo') }}</label>

                            <div class="">
                                <input id="indirizzo" type="text" class="form-control @error('indirizzo') is-invalid @enderror" name="indirizzo" value="{{ old('indirizzo') }}" required autocomplete="indirizzo" autofocus>

                                @error('indirizzo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="p_iva" class="col-form-label">{{ __('Partita Iva') }}</label>

                            <div class="">
                                <input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva" value="{{ old('p_iva') }}" required autocomplete="p_iva" autofocus>

                                @error('p_iva')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="numero_telefono" class="col-form-label">{{ __('Numero di telefono') }}</label>

                            <div class="">
                                <input id="numero_telefono" type="text" class="form-control @error('numero_telefono') is-invalid @enderror" name="numero_telefono" value="{{ old('numero_telefono') }}" required autocomplete="numero_telefono" autofocus>

                                @error('numero_telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12" id="form_tags">
                            <p>Seleziona i tag:</p>
                            @foreach ($tags as $tag)
                                <div class="form-check @error('tags') is-invalid @enderror">
                                    <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}"
                                    {{ in_array($tag->id, old('tags', [])) ? 'checked=checked' : '' }}>
                                    <label class="form-check-label">
                                        {{ $tag->cucina }}
                                    </label>
                                </div>
                            @endforeach
                            @error('tags')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <label for="password" class="col-form-label text-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="password-confirm" class="col-form-label text-right">{{ __('Conferma Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group col-12 mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
