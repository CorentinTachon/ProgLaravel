@extends('layout')

@section('main')

<form action="/pokemoncard" method="post">
    @csrf
    <label for="label">Label :</label>
    <input type="text" id="label" name="label" required>
    @error('label')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br><br>

    <label for="production_date">Date de production :</label>
    <input type="date" id="production_date" name="production_date" required>
    @error('production_date')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br><br>

    <label for="desc">Description :</label>
    <textarea id="desc" name="desc" required></textarea>
    @error('desc')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br><br>

    <label for="price">Prix :</label>
    <input type="number" id="price" name="price" required step="0.01">
    @error('price')
        <span style="color: red;">{{ $message }}</span>
    @enderror
    <br><br>

    <input type="submit" value="Ajouter">
</form>
@endsection