<?php

namespace Database\Seeders;

use App\Models\medicament;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        medicament::create([
            'nom'=>'medicament produit 1',
            'image' =>'medicament/medicament1.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 2',
            'image' =>'medicament/medicament2.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 3',
            'image' =>'medicament/medicament3.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 4',
            'image' =>'medicament/medicament4.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 5',
            'image' =>'medicament/medicament5.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 6',
            'image' =>'medicament/medicament6.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 7',
            'image' =>'medicament/medicament7.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 8',
            'image' =>'medicament/medicament8.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 9',
            'image' =>'medicament/medicament9.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 10',
            'image' =>'medicament/medicament10.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 11',
            'image' =>'medicament/medicament11.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 12',
            'image' =>'medicament/medicament12.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 13',
            'image' =>'medicament/medicament13.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 14',
            'image' =>'medicament/medicament14.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 15',
            'image' =>'medicament/medicament15.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 16',
            'image' =>'medicament/medicament16.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]);
        medicament::create([
            'nom'=>'medicament produit 17',
            'image' =>'medicament/medicament17.jpg',
            'prix'=>'125dh',
            'description'=>'lorem',
            'marque'=>'medicament'
        ]); 
    }
}
