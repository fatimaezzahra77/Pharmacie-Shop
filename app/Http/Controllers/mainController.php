<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
use App\Models\recommandation;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class mainController extends Controller
{

  
    public function main(){

        $medicaments = Main::take(10)->get();
        $recommandations = recommandation::take(8)->get();
        return view('main', ['medicaments'=>$medicaments, 'recommandations'=>$recommandations]);
    }


    public function index()
    {
    $medicaments = Main::take(10)->get();
    return view('products', ['medicaments' => $medicaments]);
    }

    // public function indexrecomm()
    // {
    // $recommandations = recommandation::take(6)->get();
    // return view('recommandation', ['recommandations' => $recommandations]);
    // }
     
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

    public function seeMorerecomm()
    {
    // Retrieve all products
    $recommandations = recommandation::all();
    // Modify the image URL to include the full URL
    foreach ($recommandations as $recommandation) {
        $recommandation->image = asset($recommandation->image);
    }
    return view('seeMorerecomm', ['recommandations' => $recommandations]);
    }

    public function showrecomm(string $id)
    {
        $recommandation = recommandation::findorFail($id);
        $recommandation->image = asset($recommandation->image);
        return view('showrecomm', ['recommandation' => $recommandation]); 
    }



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
