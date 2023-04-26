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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        hygiene::create([
            'nom'=>'roche produit 1',
            'image' =>'hygiene_roche/rocheh1.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'roche produit 2',
            'image' =>'hygiene_roche/rocheh2.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'roche produit 3',
            'image' =>'hygiene_roche/rocheh3.jpg',
            'prix'=>'120dh',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'roche produit 4',
            'image' =>'hygiene_roche/rocheh4.jpg',
            'prix'=>'120dh',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'roche produit 5',
            'image' =>'hygiene_roche/rocheh5.jpg',
            'prix'=>'140dh',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        hygiene::create([
            'nom'=>'roche produit 6',
            'image' =>'hygiene_roche/rocheh6.jpg',
            'prix'=>'60dh',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
    }
}
