<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pokemoncard;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            $c = new Pokemoncard;
            $c->label = "Carapuce";
            $c->price = 20.99;
            $c->desc ='pistolet a eau';
            $c->production_date ='1996-02-27';
            $c->image_path ='https://www.pokepedia.fr/Fichier:Carapuce-RFVF.png';
            $c->save();

            $c = new Pokemoncard;
            $c->label = "Salameche";
            $c->price = 20.99;
            $c->desc ='Lance-flammes';
            $c->production_date ='1996-02-27';
            $c->image_path ='https://www.pokepedia.fr/Fichier:Salam%C3%A8che-RFVF.png';
            $c->save();
            
            $c = new Pokemoncard;
            $c->label = "Pikachu";
            $c->price = 20.99;
            $c->desc ='Pika-pika';
            $c->production_date ='1996-02-27';
            $c->image_path ='https://www.pokepedia.fr/Fichier:Pikachu-DEPS.png';
            $c->save();
            



    }
}
