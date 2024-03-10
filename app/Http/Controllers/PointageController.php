<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pointage;

class PointageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les pointages
        $pointages = Pointage::all();
        return view('pointages.index', compact('pointages'));
    }
    public function create()
    {
        // Afficher le formulaire pour créer un nouveau pointage
        return view('pointages.create');
    }
    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'user_id' => 'required',
            'heure_pointage' => 'required|date',
        ]);
        Pointage::create($request->all());
        return redirect()->route('pointages.index')
            ->with('success', 'Pointage créé avec succès.');
    }
}
