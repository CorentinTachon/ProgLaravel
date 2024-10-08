<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemoncard; // ajout du namespace du modèle

class PokemoncardController extends Controller
{
    public function index()
    {
        $pokemoncards = Pokemoncard::all();
        return view('pokemoncard.index', compact('pokemoncards')); // correction du nom de la vue
    }

    public function create()
    {
        return view('pokemoncard.create'); // correction du nom de la vue
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'label' =>'required|string|max:19',
            'price' => 'required|numeric', // correction de la règle de validation pour le prix
            'desc'  =>'required|string',
            'production_date' => 'required|date',
            'image_path' => 'nullable|string', // ajout de la règle nullable pour le champ image_path
        ]);

        $pokemoncard = new Pokemoncard;
        $pokemoncard->label = $validatedData['label'];
        $pokemoncard->price = $validatedData['price'];
        $pokemoncard->desc = $validatedData['desc'];
        $pokemoncard->production_date = $validatedData['production_date'];
        $pokemoncard->image_path = $validatedData['image_path'] ?? null; // ajout d'une valeur par défaut pour le champ image_path
        $pokemoncard->save();
        return redirect()->route('pokemoncard.show', $pokemoncard->id); // correction de la redirection
    }

    public function show($id)
    {
        $pokemoncard = Pokemoncard::find($id);
        return view('pokemoncard.show', compact('pokemoncard')); // correction du nom de la vue
    }

    public function edit($id)
    {
        $pokemoncard = Pokemoncard::find($id);
        return view('pokemoncard.edit', compact('pokemoncard')); // correction du nom de la vue
    }

public function update(Request $request, $id)
{
    $pokemoncard = PokemonCard::find($id);
    $pokemoncard->label = $request->input('label');
    $pokemoncard->desc = $request->input('desc');
    $pokemoncard->save();

    return redirect()->route('show.blade.php', $id);
}
    public function destroy($id)
    {
        $pokemoncard = Pokemoncard::find($id);
        $pokemoncard->delete();
        return redirect()->route('pokemoncard.index')->with('success', 'Article supprimé avec succès!'); // correction de la redirection
    }
}