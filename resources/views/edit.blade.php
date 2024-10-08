   <form method="POST" action="/pokemoncard/id>
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="label">label</label>
        <input type="text" class="form-control" id="name" name="label" value="{{ old('label', $pokemoncards->label) }}">
    </div>

    <div class="form-group">
        <label for="desc">Description</label>
        <textarea class="form-control" id="description" name="desc">{{ old('desc', $pokemoncards->desc) }}</textarea>
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
    