<?php

namespace App\Http\Controllers;

use App\Models\Deposerrapport; //import this
use Illuminate\Http\Request;


class DeposerrapportController extends Controller
{
    public function store(Request $request)
    {
        // Valider les fichiers soumis
        $request->validate([
            'deposer_rapport' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'deposer_presentation' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'deposer_fiche_evaluation' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'deposer_attestation_stage' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Initialiser un tableau pour stocker les chemins des fichiers
        $files = [];

        // Gérer chaque fichier
        if ($request->hasFile('deposer_rapport')) {
            $files['rapport'] = $request->file('deposer_rapport')->store('uploads');
        }
        if ($request->hasFile('deposer_presentation')) {
            $files['presentation'] = $request->file('deposer_presentation')->store('uploads');
        }
        if ($request->hasFile('deposer_fiche_evaluation')) {
            $files['fiche_evaluation'] = $request->file('deposer_fiche_evaluation')->store('uploads');
        }
        if ($request->hasFile('deposer_attestation_stage')) {
            $files['attestation_stage'] = $request->file('deposer_attestation_stage')->store('uploads');
        }

        // Sauvegarder les informations dans la base de données
        Deposerrapport::create($files);

        // Retourner une réponse ou rediriger
        return redirect()->back()->with('success', 'Fichiers déposés avec succès.');
    }
}
