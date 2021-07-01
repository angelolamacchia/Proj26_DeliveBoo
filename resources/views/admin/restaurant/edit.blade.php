@extends('layouts.dashboard')

@section('content')
<div class="container-fluid" id="restaurant_edit">
    <form action="{{ route('restaurant.update',  $user) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="nome_attivita" class="col-md-4 col-form-label text-md-right">{{ __('Nome attività') }}</label>
    
            <div class="col-md-6">
                <input id="nome_attivita" type="text" class="form-control @error('nome_attivita') is-invalid @enderror" name="nome_attivita" value="{{ $user->nome_attivita, old('nome_attivita') }}" required autocomplete="nome_attivita" autofocus>
    
                @error('nome_attivita')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="indirizzo" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>
    
            <div class="col-md-6">
                <input id="indirizzo" type="text" class="form-control @error('indirizzo') is-invalid @enderror" name="indirizzo" value="{{ $user->indirizzo, old('indirizzo') }}" required autocomplete="indirizzo" autofocus>
    
                @error('indirizzo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="p_iva" class="col-md-4 col-form-label text-md-right">{{ __('Partita Iva') }}</label>
    
            <div class="col-md-6">
                <input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva" value="{{ $user->p_iva, old('p_iva') }}" required autocomplete="p_iva" autofocus>
    
                @error('p_iva')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="numero_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>
    
            <div class="col-md-6">
                <input id="numero_telefono" type="text" class="form-control @error('numero_telefono') is-invalid @enderror" name="numero_telefono" value="{{ $user->numero_telefono, old('numero_telefono') }}" required autocomplete="numero_telefono" autofocus>
    
                @error('numero_telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="numero_telefono" class="col-md-4 col-form-label text-md-right">{{ __('Tipologie di ristorante disponibili') }}</label>
    
            <div class="col-md-6">
                {{-- <p>Seleziona i tag:</p>
            @foreach ($tags as $tag)
                <div class="form-check @error('tags') is-invalid @enderror">
                    <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}"
                    {{ $user->tags->contains($tag) ? 'checked=checked' : '' }}>
                    <label class="form-check-label">
                        {{ $tag->cucina }}
                    </label>
                </div>
            @endforeach
            @error('tags')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror --}}
    
            {{-- Prova --}}
    
            @foreach ($tags as $tag)
                            <div class="form-check @error('tags') is-invalid @enderror">
                                @if($errors->any())
                                <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}"
                                {{ in_array($tag->id, old('tags', [])) ? 'checked=checked' : '' }}>
                                @else
                                <input name="tags[]" class="form-check-input" type="checkbox" value="{{ $tag->id }}"
                                {{ $user->tags->contains($tag) ? 'checked=checked' : '' }}>
                                @endif
                                <label class="form-check-label">
                                    {{ $tag->cucina }}
                                </label>
                            </div>
                        @endforeach
    
            {{-- fine prova --}}
            </div>
        </div>
    
        <div class="form-group row">
            <label for="img_banner" class="col-md-4 col-form-label text-md-right">{{ __('Il vostro Banner') }}</label>
    
            <div class="col-md-6">
                <input id="img_banner" type="file" name="img_banner">
    
                @error('img_banner')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="form-group row">
            <label for="img_logo" class="col-md-4 col-form-label text-md-right">{{ __('Il vostro Logo') }}</label>
    
            <div class="col-md-6">
                <input id="img_logo" type="file" name="img_logo">
    
                @error('img_logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        
    
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Aggiorna Profilo') }}
                </button>
            </div>
        </div>
    
    </form>
</div>

@endsection