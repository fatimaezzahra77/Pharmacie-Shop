<?php

namespace App\Http\Controllers;

use App\Models\beaute;
use Illuminate\Http\Request;

class beauteController extends Controller
{
    public function index(){
        $beautes = beaute::latest()->paginate(12);
        return view('bautes.index', ['beautes' =>$beautes]);
    }
}
