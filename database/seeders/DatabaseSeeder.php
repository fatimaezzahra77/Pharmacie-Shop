<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\hygiene;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ComplementsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(MedicamentsSeeder::class);
        $this->call(BeautesSeeder::class);
        $this->call(RecommandationsSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        hygiene::create([
            'nom'=>'Roche produit 1',
            'image' =>'hygiene_roche/rocheh1.jpg',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 2',
            'image' =>'hygiene_roche/rocheh2.jpg',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 3',
            'image' =>'hygiene_roche/rocheh3.jpg',
            'prix'=>'120.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 4',
            'image' =>'hygiene_roche/rocheh4.jpg',
            'prix'=>'120.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 5',
            'image' =>'hygiene_roche/rocheh5.jpg',
            'prix'=>'140.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 6',
            'image' =>'hygiene_roche/rocheh6.jpg',
            'prix'=>'60.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 7',
            'image' =>'hygiene_roche/rocheh8.jpg',
            'prix'=>'60.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'Roche produit 8',
            'image' =>'hygiene_roche/rocheh9.jpg',
            'prix'=>'60.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);

            // produits de biafine : 

        hygiene::create([
            'nom'=>'biafine produit 1',
            'image' =>'hygiene_biafine/biafineh1.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 2',
            'image' =>'hygiene_biafine/biafineh2.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 3',
            'image' =>'hygiene_biafine/biafineh3.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 4',
            'image' =>'hygiene_biafine/biafineh4.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 5',
            'image' =>'hygiene_biafine/biafineh5.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 6',
            'image' =>'hygiene_biafine/biafineh6.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 7',
            'image' =>'hygiene_biafine/biafineh7.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 8',
            'image' =>'hygiene_biafine/biafineh8.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);
        hygiene::create([
            'nom'=>'biafine produit 9',
            'image' =>'hygiene_biafine/biafineh9.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'biafine'
        ]);

        // Cerave :

        hygiene::create([
            'nom'=>'cerave produit 1',
            'image' =>'cerave/ceravep1.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);

        hygiene::create([
            'nom'=>'cerave produit 2',
            'image' =>'cerave/ceravep2.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 3',
            'image' =>'cerave/ceravep3.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 4',
            'image' =>'cerave/ceravep4.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 5',
            'image' =>'cerave/ceravep5.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 6',
            'image' =>'cerave/ceravep6.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 7',
            'image' =>'cerave/ceravep7.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 8',
            'image' =>'cerave/ceravep8.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 9',
            'image' =>'cerave/ceravep9.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'cerave produit 10',
            'image' =>'cerave/ceravep10.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);

        // produit mix: 
        hygiene::create([
            'nom'=>'mix produit 1',
            'image' =>'produitsmix/produitmix1.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);

        hygiene::create([
            'nom'=>'mix produit 2',
            'image' =>'produitsmix/produitmix2.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);

        hygiene::create([
            'nom'=>'mix produit 3',
            'image' =>'produitsmix/produitmix3.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 4',
            'image' =>'produitsmix/produitmix4.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 5',
            'image' =>'produitsmix/produitmix5.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 6',
            'image' =>'produitsmix/produitmix6.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 7',
            'image' =>'produitsmix/produitmix7.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 8',
            'image' =>'produitsmix/produitmix8.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 9',
            'image' =>'produitsmix/produitmix9.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 10',
            'image' =>'produitsmix/produitmix10.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 11',
            'image' =>'produitsmix/produitmix11.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 12',
            'image' =>'produitsmix/produitmix12.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 13',
            'image' =>'produitsmix/produitmix13.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 14',
            'image' =>'produitsmix/produitmix14.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);
        hygiene::create([
            'nom'=>'mix produit 15',
            'image' =>'produitsmix/produitmix15.jpg',
            'prix'=>'60',
            'description'=>'lorem',
            'marque'=>'cerave'
        ]);

    }
}
