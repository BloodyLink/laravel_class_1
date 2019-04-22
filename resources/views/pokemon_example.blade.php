@extends("layouts.pokedex_layout")

@section("pokemon_list")
<link rel="stylesheet" href="{{ URL::asset('css/poke_list.css') }}">
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        @foreach ($pokemons as $pokemon)
        
        <div class="poke_list">
            <div class="row">
                <div class="col-sm-5">
                    <img class="poke_photo" 
                        src="{{ $pokemon["picture"] }}"
                        alt="{{ $pokemon["name"] }}"
                    >
                </div>
                <div class="col-sm-7">
                    <ul>
                        <li>Name: {{ $pokemon["name"] }} </li>
                        <li>Type: {{ $pokemon["type"] }} </li>
                        <li>Catch rate: {{ $pokemon["catch_rate"] }} </li>
                        <li>Height: {{ $pokemon["height"] }} </li>
                        <li>Weight: {{ $pokemon["weight"] }} </li>
                    </ul>
                </div>
            </div>
        </div>

        @endforeach
       
    </div>
</div>

@endsection