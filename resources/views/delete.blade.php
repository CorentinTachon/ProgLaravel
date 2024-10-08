
<form action="{{ route('articles.destroy', $article->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>



    $article = Article::find($id);
    $article->delete();
    return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès!');
}