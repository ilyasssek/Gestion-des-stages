<?php

namespace App\Http\Controllers;

use App\Models\Infoencadrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfoencadrantController extends Controller
{
    /**
     * Afficher le formulaire d'inscription
     */
    public function loadddRegisterForm()
    {
        return view("register3-form");
    }
    public function loadAllInfoencadrants(){
        $all_infoencadrants = Infoencadrant::all();
        return view('infoencadrants',compact('all_infoencadrants'));
    }

    /**
     * Enregistrer un nouvel étudiant
     */
    public function registerInfoencadrant(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:infosetudiants,email',
            'username' => 'required|string|unique:infosetudiants,username',
            'phone_number' => 'required|string|max:15',
            'matricule' => 'required|unique:infosetudiants,matricule',
           
            'annee_universitaire' => 'required|string',
            'cne' => 'required|unique:infosetudiants,cne',
            'date_naissance' => 'required|date',
            'nationalite' => 'required|string',
            'genre' => 'required|in:Masculin,Féminin',
            'password' => 'required|min:6|max:8|confirmed',
        ]);

        try {
            // Création et sauvegarde de l'étudiant
            $infoencadrant = new Infoencadrant();
            $infoencadrant->name = $request->name;
            $infoencadrant->email = $request->email;
            $infoencadrant->username = $request->username;
            $infoencadrant->phone_number = $request->phone_number;
            $infoencadrant->matricule = $request->matricule;
            $infoencadrant->annee_universitaire = $request->annee_universitaire;
            $infoencadrant->cne = $request->cne;
            $infoencadrant->date_naissance = $request->date_naissance;
            $infoencadrant->nationalite = $request->nationalite;
            $infoencadrant->genre = $request->genre;
            $infoencadrant->password = Hash::make($request->password);
            $infoencadrant->save();

            // Redirection après succès
            return redirect('/registration/formmm')->with('success', 'Inscription réussie !');
        } catch (\Exception $e) {
            // Gestion des erreurs
            return redirect('/registration/formmm')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de connexion
     */
    public function loaddLoginPage3()
    {
        return view('login-page3');
    }

    /**
     * Connexion d'un étudiant
     */
    public function LoginInfoencadrant(Request $request)
    {
        // Validation des données
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:6|max:8',
        ]);

        try {
            // Authentification pour la table `infosetudiants` avec le guard personnalisé
            $credentials = $request->only('username', 'password');
        
            if (Auth::guard('infoencadrants')->attempt($credentials)) {
                // Redirection vers l'espace étudiant en cas de succès
                return redirect('/infoencadrant2')->with('success', 'Connexion réussie.');
            } else {
                // Message en cas d'erreur d'identifiants
                return redirect('/login/formmm')->with('error', 'Identifiants incorrects.');
            }
        } catch (\Exception $e) {
            // Gestion des erreurs et redirection avec un message approprié
            return redirect('/login/formmm')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }        
    /**
     * Afficher la page d'accueil de l'étudiant
     */
    public function loadddHomePage()
    {
        return view('infoencadrant2');
    }
    public function Editinfoencadrant(Request $request){
        // perform form validation here
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required',
            'matricule' => 'required',
           'annee_universitaire' => 'required',
           'cne' => 'required',
            'date_naissance' => 'required|date',
            'nationalite' => 'required',
            'genre' => 'required|in:Masculin,Féminin',
        ]);
        try {
             // update user here
            $update_infoencadrant = Infoencadrant::where('id',$request->infoencadrant_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'matricule' => $request->matricule,
                
                'annee_universitaire' => $request->annee_universitaire,
                'cne' => $request->cne,
                'date_naissance' => $request->date_naissance,
                'nationalite' => $request->nationalite,
                'genre' => $request->genre,
            ]); 

            return redirect('/infoencadrants')->with('success','infoencadrant Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit/infoencadrant')->with('fail',$e->getMessage());
        }
    }

    public function loaddEditForm($id){
        $infoencadrant = Infoencadrant::find($id);

        return view('edit-infoencadrant',compact('infoencadrant'));
    }


    public function deleteInfoencadrant($id){
        try {
            Infoencadrant::where('id',$id)->delete();
            return redirect('/infoencadrants')->with('success','infoencadrant Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/infoencadrants')->with('fail',$e->getMessage());
            
        }
    }
   
}

