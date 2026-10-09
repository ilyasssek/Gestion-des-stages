<?php
namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    // Afficher la liste des enseignants
    public function index()
    {
        $enseignants = Enseignant::all();
        return view('enseignants.index', compact('enseignants'));
    }

    // Afficher le formulaire pour créer un enseignant
    public function create()
    {
        return view('enseignants.create');
    }

    // Enregistrer un nouvel enseignant
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email',
            'specialite' => 'required|string|max:255',
        ]);

        Enseignant::create($request->all());

        return redirect()->route('enseignants.index');
    }

    // Afficher un enseignant spécifique
    public function show($id)
    {
        $enseignant = Enseignant::findOrFail($id);
        return view('enseignants.show', compact('enseignant'));
    }

    // Afficher le formulaire pour éditer un enseignant
    public function edit($id)
    {
        $enseignant = Enseignant::findOrFail($id);
        return view('enseignants.edit', compact('enseignant'));
    }

    // Mettre à jour un enseignant
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $id,
            'specialite' => 'required|string|max:255',
        ]);

        $enseignant = Enseignant::findOrFail($id);
        $enseignant->update($request->all());

        return redirect()->route('enseignants.index');
    }

    // Supprimer un enseignant
    public function destroy($id)
    {
        Enseignant::destroy($id);

        return redirect()->route('enseignants.index');
    }
}

