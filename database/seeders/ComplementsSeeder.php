<?php

namespace Database\Seeders;

use App\Models\complement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComplementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Aloe_Vera.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Balance.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Balance2.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Bios7.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Collagen_Plus.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Complete_Vanilla.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Hawaii_Noni.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/omegalife-3_resolv.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Probionic_Plus2.jpg',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Probionic_Plus3.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Probionic_Plus.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);
        complement::create([
            'nom'=>'Complement 1',
            'image' =>'Product_Unicity/Unimate_Lemon.png',
            'prix'=>'125.00',
            'description'=>'lorem',
            'marque'=>'roche-posay'
        ]);

    }
}
