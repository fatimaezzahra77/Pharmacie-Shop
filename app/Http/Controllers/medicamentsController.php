<?php

namespace App\Http\Controllers;

use App\Models\medicament;
use Illuminate\Http\Request;

class medicamentsController extends Controller
{
    
    public function index(){
        $medicamentsproduits = medicament::latest()->paginate(12); // Display 10 products per page
        return view('medicaments.index', ['medicamentsproduits' => $medicamentsproduits ]);
    }

    public function singleProduct($id){
        $medicamentsproduit = medicament::find($id);
        $medicamentsproduit->image = asset($medicamentsproduit->image);
        return view('medicaments.singleProduct', ['medicamentsproduit' => $medicamentsproduit]); 
    }

}
