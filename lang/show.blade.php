@extends('layout')


@section('main')
@if (!empty($pokemoncard))
    <ul>
        <li>{{ $pokemoncard->label }}</li>
        <li>{{ $pokemoncard->desc }}</li>
        <li>{{ $pokemoncard->price }}</li>
        <li>{{ $pokemoncard->production_date }}</li>
    </ul>
@else
    <p>Pokémon card not found.</p>
@endif
@endsection