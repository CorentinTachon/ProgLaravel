<form action="{{ route('pokemoncard/{{id}}/update', $pokemoncard->id) }}" method="post">
    @csrf
    @method('PUT')
    
    <input type="text" name="name" value="{{ $pokemoncard->name }}">
    <input type="submit" value="Update Pokémon Card">
</form>