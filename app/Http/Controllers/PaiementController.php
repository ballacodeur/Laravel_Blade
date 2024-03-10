<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;

class PaiementController extends Controller
{

    public function index()
    {
        // Récupérer tous les paiements
        $paiements = Paiement::all();
        return view('paiement.list', compact('paiements'));
    }


    public function create()
    {
        // Afficher le formulaire pour créer un nouveau paiement
        return view('paiement/add');
    }


    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'user_id' => 'required',
            'montant' => 'required|numeric',
            'date_paiement' => 'required|date',
        ]);
        // Créer un nouveau paiement
        Paiement::create($request->all());
        return redirect()->route('paiement.add')
            ->with('success', 'Paiement créé avec succès.');
    }


    public function edit($id)
    {
        // Récupérer le paiement à mettre à jour
        $paiement = Paiement::findOrFail($id);
        return view('paiement.update', compact('paiement'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'user_id' => 'required',
            'montant' => 'required|numeric',
            'date_paiement' => 'required|date',
        ]);

        $paiement = Paiement::findOrFail($id);
        $paiement->update($validatedData);
        return redirect()->route('paiement.list')->with('success', 'Paiement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $paiement = Paiement::findOrFail($id);
        $paiement->delete();
        return redirect()->route('paiement.list')->with('success', 'Paiement supprimé avec succès.');
    }
}
