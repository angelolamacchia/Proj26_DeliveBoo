@extends('layouts.app')

@section('content')
    <div class="container-fluid restaurants_list_container" id="root">
        <h1 style="text-align: center">I RISTORANTI</h1>
        <div class="container ms_container">
            <div class="filter">
                <div class="search_container">
                    <div class="filter_select text-center">
                        <div class="tags clearfix row">
                            @foreach ($tags as $tag)
                                <div class="wrapper_filter col-lg-3 col-md-4 col-6">
                                    <a @click='addTag({{ json_encode($tag->cucina) }})'>
                                        <div class="tag">
                                            <img src="{{ asset('img/tags/' . $tag->cucina . '.png') }}" alt="">
                                            <div>
                                                {{ $tag->cucina }}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" @click='filterTags()'
                            class="filter_button btn btn-lg btn-primary">Filtra</button>
                    </div>
                </div>

                <div class="filter_selected text-center" v-for='(tag, index) in tags'>
                    <div class="wrapper_remove_tag col-lg-3 col-md-4 col-6 clearfix">
                        <div class="remove_tag" @click='removeTag(tag)'>@{{ tag }}</div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div v-for='restaurant in restaurants' class="wrapper_restaurant col-12 col-sm-6 col-md-4 col-lg-3" id="restaurant_card">
                        <div class="single_restaurant">
                            <div class="img_container">
                                <img :src="'storage/'+ restaurant.img_banner" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">@{{ restaurant . nome_attivita }}</h3>
                                <p class="card-text"><strong>Indirizzo:</strong> @{{ restaurant . indirizzo }}</p>
                                <p class="card-text"><strong>Numero di telefono:</strong> @{{ restaurant . numero_telefono }}
                                </p>
                                <p class="card-text"><strong>Tipo di cucina:</strong>
                                    <span v-for="tag in restaurant.tags">@{{ tag . cucina }} </span>
                                    {{-- <span>@{{ restaurant . id }}</span> --}}
                                </p>
                                <div id="make_order">
                                    <a @click='pushLink(restaurant.id); emptyStorage();' :href='link'>
                                        <button>
                                            Fai il tuo ordine
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- @foreach ($restaurants as $restaurant)
                <div class="single_restaurant">
                    <h3>{{ $restaurant->nome_attivita }}</h3>
                    <p class="m_top"><strong>Indirizzo:</strong> {{ $restaurant->indirizzo }}</p>
                    <p><strong>Numero di telefono:</strong> {{ $restaurant->numero_telefono }}</p>
                    <p><strong>Tipo di cucina:</strong>
                        @foreach ($tags as $tag)
                            {{ $restaurant->tags->contains($tag) ? $tag->cucina . ' | ' : '' }}
                        @endforeach
                    </p>
                    <button><a href="{{ route('guest.plates.index', ['id' => $restaurant->id]) }}">EFFETTUA ORDINE</a></button>
                </div>
            @endforeach --}}
@endsection
