<?php

namespace App\Http\Controllers;

use App\Models\complement;
use Illuminate\Http\Request;

class complementsController extends Controller
{
    public function index(){
        $complements = complement::latest()->paginate(12);
        return view('complements.index', ['complements' =>$complements]);
    }

    public function singleProduct($id){
        $complement = complement::find($id);
        $complement->image = asset($complement->image);
        return view('complements.singleProduct', ['complement' => $complement]); 
    }
}
