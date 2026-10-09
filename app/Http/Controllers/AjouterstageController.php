<?php

namespace App\Http\Controllers;

use App\Models\Ajouterstage; // Import the User model
use Illuminate\Http\Request;

class AjouterstageController extends Controller
{
    // Load all users (or stages in this case)
    public function loadAllAjouterstages() {
        $all_ajouterstages = Ajouterstage::all();
        return view('ajouterstages', compact('all_ajouterstages'));
    }

    public function loadAlllAjouterstages() {
        $all_ajouterstages = Ajouterstage::all();
        return view('stagedesetudiant', compact('all_ajouterstages'));
    }
   

    // Load form to add a new user (or stage)
    public function loadAddAjouterstageForm() {
        return view('add-ajouterstage');
    }

    // Add a new user (or stage)
    public function AddAjouterstage(Request $request) {
        // Perform form validation
        $request->validate([
            'nom' => 'required|string|max:255',
            'ville' => 'required|string',
            'nom_entreprise' => 'required|string',
            'encadrant_entreprise' => 'required|string',
            'intitule_stage' => 'required|string',
            'duree_stage' => 'required|string',
            'description_stage' => 'required|string',
        ]);

        try {
            // Register the new stage
            $new_ajouterstage = new Ajouterstage;
            $new_ajouterstage->nom = $request->nom;
            $new_ajouterstage->ville = $request->ville;
            $new_ajouterstage->nom_entreprise = $request->nom_entreprise;
            $new_ajouterstage->encadrant_entreprise = $request->encadrant_entreprise;
            $new_ajouterstage->intitule_stage = $request->intitule_stage;
            $new_ajouterstage->duree_stage = $request->duree_stage;
            $new_ajouterstage->description_stage = $request->description_stage;
            $new_ajouterstage->save();

            return redirect('/ajouterstages')->with('success', 'Stage Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/ajouterstage')->with('fail', $e->getMessage());
        }
    }

    // Edit an existing user (or stage)
    public function EditAjouterstage(Request $request) {
        // Perform form validation
        $request->validate([
            'nom' => 'required|string|max:255',
            'ville' => 'required|string',
            'nom_entreprise' => 'required|string',
            'encadrant_entreprise' => 'required|string',
            'intitule_stage' => 'required|string',
            'duree_stage' => 'required|string',
            'description_stage' => 'required|string',
        ]);

        try {
            // Update the stage details
            Ajouterstage::where('id', $request->ajouterstage_id)->update([
                'nom' => $request->nom,
                'ville' => $request->ville,
                'nom_entreprise' => $request->nom_entreprise,
                'encadrant_entreprise' => $request->encadrant_entreprise,
                'intitule_stage' => $request->intitule_stage,
                'duree_stage' => $request->duree_stage,
                'description_stage' => $request->description_stage,
            ]);

            return redirect('/ajouterstages')->with('success', 'Stage Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit/ajouterstage')->with('fail', $e->getMessage());
        }
    }

    // Load the form to edit an existing user (or stage)
    public function loadddEditForm($id) {
        $ajouterstage = Ajouterstage::find($id);
        return view('edit-ajouterstage', compact('ajouterstage'));
    }

    // Delete a user (or stage)
    public function deleteAjouterstage($id) {
        try {
            Ajouterstage::where('id', $id)->delete();
            return redirect('/ajouterstages')->with('success', 'Stage Deleted Successfully!');
        } catch (\Exception $e) {
            return redirect('/ajouterstages')->with('fail', $e->getMessage());
        }
    }
}

