<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recommandation;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class recommandationController extends Controller
{
    // public function indexrecomm() {
    //     $recommandations = recommandation::all();
    //     return view('recommandations', ['recommandations' => $recommandations]);
    // }
    
    

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
