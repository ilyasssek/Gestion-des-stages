<?php



// app/Http/Controllers/FileController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        // Validation des fichiers téléchargés
        $request->validate([
            'rapport' => 'required|file|mimes:pdf,doc,docx|max:10240', // Limite à 10MB
            'presentation' => 'required|file|mimes:ppt,pptx|max:10240',
            'fiche_evaluation' => 'required|file|mimes:pdf,doc,docx|max:10240',
            'attestation_stage' => 'required|file|mimes:pdf|max:10240',
        ]);
        

        // Enregistrer les fichiers
        $rapportPath = $request->file('rapport')->store('uploads', 'public');
        $presentationPath = $request->file('presentation')->store('uploads', 'public');
        $ficheEvaluationPath = $request->file('fiche_evaluation')->store('uploads', 'public');
        $attestationStagePath = $request->file('attestation_stage')->store('uploads', 'public');

        // Vous pouvez aussi enregistrer ces chemins dans une base de données si nécessaire

        // Redirection vers une autre page après l'upload
        return redirect()->route('success')->with([
            'message' => 'Les fichiers ont été téléchargés avec succès!',
            'rapport' => $rapportPath,
            'presentation' => $presentationPath,
            'fiche_evaluation' => $ficheEvaluationPath,
            'attestation_stage' => $attestationStagePath,
        ]);
    }
}
