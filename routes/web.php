<?php
use App\Http\Controllers\PokemoncardController;
use App\Models\Pokemoncard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
   $nom ='coco';
 //   return view('home', [
//        'nom'=>$nom,
 //   ]);

return view('home',compact('nom'));
 });
 Route::get('/pokemoncard', [PokemoncardController::class, 'index']);
 Route::get('/pokemoncard/create', [PokemoncardController::class, 'create']);
 Route::post('/pokemoncard', [PokemoncardController::class, 'store']);
 Route::get('/pokemoncard/{id}', [PokemoncardController::class, 'show']);
 Route::get('/pokemoncard/{id}/edit', [PokemoncardController::class, 'edit']);
 Route::put('pokemoncard/{id}/update', [PokemoncardController::class,'update']);
 Route::delete('/pokemoncard/{id}', [PokemoncardController::class, 'destroy']);