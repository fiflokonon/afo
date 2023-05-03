<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RapportController extends Controller
{
    public function addRapport($id, Request $request)
    {
        if (Auth::check()) {
            // Validation des données envoyées via le formulaire
            $validatedData = $request->validate([
                'mortalite' => 'nullable|integer',
                'cause_mortalite' => 'nullable|string',
                'poids' => 'nullable|integer',
                'comment' => 'required|string',
            ]);
            // Création d'une nouvelle génération avec les données validées
            $rapport = new Rapport();
            $rapport->mortalite = $validatedData['mortalite'];
            $rapport->cause_mortalite = $validatedData['cause_mortalite'];
            $rapport->poids_moyen = $validatedData['poids'];
            $rapport->generation_id = $id;
            $rapport->user_id = Auth::user()->id;
            $rapport->save();
            return redirect()->route('rapportlist', ['id' => $id]);
        }
        else
        {
            return redirect('/');
        }
    }
}
