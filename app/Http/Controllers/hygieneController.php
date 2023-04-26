<?php

namespace App\Http\Controllers;

use App\Models\hygiene;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class hygieneController extends BaseController
{
    
    public function index(){
        return view('hygiene.hygiene',[
        'heading'=> 'Higiene Produits',
        'produits' => hygiene::latest()->get()
        ]);
    }

    public function singleProduct($id){
        $produit = hygiene::find($id);
        $produit->image = asset($produit->image);
        return view('hygiene.singleProduct', ['produit' => $produit]); 
    }
}

