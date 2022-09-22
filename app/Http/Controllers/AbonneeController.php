<?php

namespace App\Http\Controllers;

use App\Models\Abonnee;
use Illuminate\Http\Request;

class AbonneeController extends Controller
{
    //
    public function index()
    {
        $abonne = Abonnee::all();
    
        return view('abonnee.index', compact(' $abonne'));
    }

    public function create()
    {
        return view('abonnee.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $abonne = Abonnee::create($validatedData);
        
        return redirect('/abonnee')->with('success', 'Votre compte a été créer avec succèss');
    }
}
