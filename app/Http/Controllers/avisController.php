<?php

namespace App\Http\Controllers;

use App\Models\avi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class avisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('avisCreate', ['avis'=>$avis, 'users'=>$users]);
    }

    public function showAvis($id){
        $avi = avi::findorFail($id);
        // $avi->image = asset($avi->image);
        return view('showAvis', ['avi' => $avi]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'avis' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'rate' => 'required',
        ], [
            'name.requied'=>'Erreur name est obligatoire ',
            'email.requied'=>'Erreur email est obligatoire ',
            'avis.required' => 'Erreur avis est obligatoire',
            'image.image' => 'Le fichier doit être une image',
            'image.mimes' => 'Les formats d\'image pris en charge sont : jpeg, png, jpg, gif',
            'image.max' => 'La taille maximale de l\'image est de 2 Mo',
            'rate.required' => 'Erreur rate est obligatoire',
           
        ]);
        
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('imageAvies', 'public');
        }
        
    
        $avi = avi::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'avis' => $request->input('avis'),
            'image' => $request->file('image')->store('imageAvies', 'public'),
            'rate' => $request->input('rate'),
        ]);
        
        return redirect()->route('avis.showAvis', ['id' => $avi->idavis])->with('message', 'Le commentaire a été soumis avec succès.');
    }    
    /**
     * Display the specified resource.
     */ 
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
