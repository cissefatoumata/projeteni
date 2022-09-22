<?php

namespace App\Http\Controllers;

use App\Models\Fournisseurs;
use Illuminate\Http\Request;

class FournisseursController extends Controller
{
    //
    public function index()
    {
        $fourni = Fournisseurs::all();
    
        return view('fournisseurs.index', compact('fourni'));
    }
}
