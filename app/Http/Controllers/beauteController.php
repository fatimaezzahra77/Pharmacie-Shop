<?php

namespace App\Http\Controllers;

use App\Models\beaute;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class beauteController extends Controller
{
    public function index(){
        $beautes = beaute::latest()->paginate(12);
        return view('beautes.index', ['beautes' =>$beautes]);
<<<<<<< HEAD
=======
    }

    public function singleProduct($id){
        $beaute = beaute::find($id);
        $beaute->image = asset($beaute->image);
        return view('beautes.singleProduct', ['beaute' => $beaute]); 
>>>>>>> 95c7e3e8d44b97d8f63d2460d1896bee8ec9395b
    }
}
