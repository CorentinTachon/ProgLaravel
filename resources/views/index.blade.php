@extends('layout')

@section('main')


<table>
    <tr>
        <th>id</th>
        <th> label</th>
        <th>Price</th>
        <th>Desc</th>
        <th>production_date</th>
        
    </tr>

</table>


@foreach ($pokemoncards as $pokemoncard)
    <tr>
        <td>{{$pokemoncard->id}}</td>
        <td>{{$pokemoncard->label}}</td>
        <td>{{$pokemoncard->price}}</td>
        <td>{{$pokemoncard->desc}}</td>
        <td>{{$pokemoncard->production_date}}</td>

    </tr>
<form>
    <div>
        <a href='/pokemoncard/{{$pokemoncards->id}}'> <button> type="submit" class="btn btn-primary">Update</button></a>
    </div>
</form>
@endforeach
@endsection