<?php

namespace App\Http\Controllers;

use App\Models\hygiene;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class hygieneController extends BaseController
{
    
    public function index(){
        $produits = hygiene::latest()->paginate(12); // Display 10 products per page
        return view('hygiene.hygiene', [
            'heading' => 'Higiene et sante',
            'produits' => $produits
        ]);
    }

    public function reactCart(){
        $produits = hygiene::all();
        return view('reactCart', ['produits'=>$produits]);
    }
    

    public function singleProduct($id){
        $produit = hygiene::find($id);
        $produit->image = asset($produit->image);
        return view('hygiene.singleProduct', ['produit' => $produit]); 
    }

    public function addToCart($id){
        $produit = hygiene::findorFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "nom" => $produit->nom,
                "image" => $produit->image,
                "prix" => $produit->prix,
                "description"=>$produit->description,
                "marque"=>$produit->marque,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produit est bien ajoute au panier !');
    }

    public function cart(){
        return view('hygiene.cart');
    }

    public function update(Request $request, string $id)
    {
        $cart = session()->get('cart');
    
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            // session()->flash('success', 'Cart successfully updated!');
        }
    
        return redirect()->route('cart');
    }
      

    public function remove($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Produits est bien supprimer !');
        return redirect()->back();
    }   

}

