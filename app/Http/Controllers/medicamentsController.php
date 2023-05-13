<?php

namespace App\Http\Controllers;

use App\Models\medicament;
use Illuminate\Http\Request;

class medicamentsController extends Controller
{
    
    public function index(){
        $medicaments = medicament::latest()->paginate(12); // Display 10 products per page
        return view('medicaments.index', ['medicaments' => $medicaments ]);
    }

}
