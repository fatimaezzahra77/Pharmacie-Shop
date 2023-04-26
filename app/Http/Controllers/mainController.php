<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class mainController extends Controller
{

    public function main(){
        $medicaments = Main::take(10)->get();
        return view('main', ['medicaments'=>$medicaments]);
    }

    public function index()
    {
    $medicaments = Main::take(10)->get();
    return view('products', ['medicaments' => $medicaments]);
    }

    public function showAll()
    {
    // Retrieve all products
    $medicaments = Main::all();
    // Modify the image URL to include the full URL
    foreach ($medicaments as $medicament) {
        $medicament->image = asset($medicament->image);
    }
    return view('seemore', ['medicaments' => $medicaments]);
    }

    /**
     * Display the specified resource.
     */
    public function showmedicament(string $id)
    {
        $medicament = Main::findorFail($id);
        $medicament->image = asset($medicament->image);
        return view('showmedicament', ['medicament' => $medicament]); 
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function recommendation()
    {
         return view('recommendation');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
