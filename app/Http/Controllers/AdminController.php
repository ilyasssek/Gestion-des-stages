<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Afficher la liste des enseignants
    public function index()
    {
        $enseignants = Admin::all();
        return view('adminss.index', compact('admins'));
    }

    // Afficher le formulaire pour créer un enseignant
    public function create()
    {
        return view('admins.create');
    }

    // Enregistrer un nouvel enseignant
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email',
          
        ]);

        Admin::create($request->all());

        return redirect()->route('admins.index');
    }

    // Afficher un enseignant spécifique
    public function show($id)
    {
        $enseignant = Admin::findOrFail($id);
        return view('admins.show', compact('admin'));
    }

    // Afficher le formulaire pour éditer un enseignant
    public function edit($id)
    {
        $enseignant = Admin::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    // Mettre à jour un enseignant
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:enseignants,email,' . $id,
            
        ]);

        $enseignant = Admin::findOrFail($id);
        $enseignant->update($request->all());

        return redirect()->route('admins.index');
    }

    // Supprimer un enseignant
    public function destroy($id)
    {
        Admin::destroy($id);

        return redirect()->route('admins.index');
    }
}

