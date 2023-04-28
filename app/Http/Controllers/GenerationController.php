<?php

namespace App\Http\Controllers;

use App\Models\Generation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenerationController extends Controller
{

    public function addGeneration(Request $request)
    {
        if (Auth::check())
        {
            // Validation des données envoyées via le formulaire
            $validatedData = $request->validate([
                'race' => 'required|string|max:255',
                'effectif' => 'required|integer',
                'poids' => 'required|numeric',
                'date_arrivee' => 'required|date',
            ]);

            // Création d'une nouvelle génération avec les données validées
            $generation = new Generation();
            $generation->race = $validatedData['race'];
            $generation->effectif = $validatedData['effectif'];
            $generation->poids_moyen = $validatedData['poids'];
            $generation->date_arrive = $validatedData['date_arrivee'];
            $generation->user_id = Auth::user()->id;
            $generation->save();
            // Redirection vers une page de confirmation
            return redirect('generationlist');

        }
        else
        {
            return redirect('/');
        }

    }

}
