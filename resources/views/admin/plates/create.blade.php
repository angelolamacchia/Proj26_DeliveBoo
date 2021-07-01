@extends('layouts.dashboard')

@section('content')

    <div class="admin_plates_container create_container">
        <div class="ms_container">
            <div class="col-12">
                <div class="return d-flex justify-content-between align-items-center">
                    <h1>Aggiungi un nuovo piatto</h1>
                    <a href="{{ route('admin.restaurant.index') }}">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-activity">
                                <line x1="20" y1="12" x2="4" y2="12"></line>
                                <polyline points="10 18 4 12 10 6"></polyline>
                            </svg> Torna ai piatti
                        </button>
                    </a>
                </div>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form action="{{ route('plates.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nome del piatto</label>
                        <input type="text" name="nome_piatto"
                            class="form-control @error('nome_piatto') is-invalid @enderror"
                            placeholder="Inserisci il nome del piatto" value="{{ old('nome_piatto') }}" required>
                        @error('nome_piatto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Descrizione</label>
                        <textarea name="descrizione" class="form-control @error('descrizione') is-invalid @enderror"
                            rows="5" placeholder="Inizia la descrizione" required>{{ old('descrizione') }}</textarea>
                        @error('descrizione')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Ingredienti</label>
                        <input type="text" name="ingredienti"
                            class="form-control @error('ingredienti') is-invalid @enderror"
                            placeholder="Inserisci gli ingredienti" value="{{ old('ingredienti') }}" required>
                        @error('ingredienti')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="prezzo">Prezzo <span>(puoi inserire un massimo di 999 	&euro;)</span></label>
                        <input placeholder="Inserisci il prezzo" class="prezzo form-control @error('prezzo') is-invalid @enderror" type="number" id="prezzo"
                            name="prezzo" min="0" max="999" step="any" value="{{ old('prezzo') }}">
                        @error('prezzo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Seleziona la portata</label>
                        <select name="dish_id" id="dish_id">
                            @foreach ($dishes as $dish)
                                <option value="{{ $dish->id }}">{{ $dish->portata }}</option>
                            @endforeach
                        </select>

                        @error('dishes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Visibilità</label>
                        <select name="visibilita" id="visibilita">
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>

                        @error('dishes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit">
                            Aggiungi il piatto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
