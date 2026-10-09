<?php

namespace App\Http\Controllers;

use App\Models\Infosetudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfosetudiantController extends Controller
{
    /**
     * Afficher le formulaire d'inscription
     */
    public function loaddRegisterForm()
    {
        return view("register2-form");
    }
    public function loadAllInfosetudiants(){
        $all_infosetudiants = Infosetudiant::all();
        return view('infosetudiants',compact('all_infosetudiants'));
    }
    public function loaddddddAllInfosetudiants(){
        $all_infosetudiants = Infosetudiant::all();
        return view('emailadmin',compact('all_infosetudiants'));
    }
    public function loadddAllInfosetudiants(){
        $all_infosetudiants = Infosetudiant::all();
        return view('choisiretudiant',compact('all_infosetudiants'));
    }
    public function loadddddAllInfosetudiants(){
        $all_infosetudiants = Infosetudiant::all();
        return view('listeetudiantlibre',compact('all_infosetudiants'));
    }
    public function loaddddAllInfosetudiants(){
        $all_infosetudiants = Infosetudiant::all();
        return view('listeetudiant',compact('all_infosetudiants'));
    }

    /**
     * Enregistrer un nouvel étudiant
     */
    public function registerInfosetudiant(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:infosetudiants,email',
            'username' => 'required|string|unique:infosetudiants,username',
            'phone_number' => 'required|string|max:15',
            'matricule' => 'required|unique:infosetudiants,matricule',
            'classe' => 'required|string',
            'groupe' => 'required|string',
            
            'annee_universitaire' => 'required|string',
            'cne' => 'required|unique:infosetudiants,cne',
            'date_naissance' => 'required|date',
            'nationalite' => 'required|string',
            'genre' => 'required|in:Masculin,Féminin',
            'password' => 'required|min:6|max:8|confirmed',
        ]);

        try {
          
            $infosetudiant = new Infosetudiant();
            $infosetudiant->name = $request->name;
            $infosetudiant->email = $request->email;
            $infosetudiant->username = $request->username;
            $infosetudiant->phone_number = $request->phone_number;
            $infosetudiant->matricule = $request->matricule;
           
            $infosetudiant->classe = $request->classe;
            $infosetudiant->groupe = $request->groupe;
            $infosetudiant->annee_universitaire = $request->annee_universitaire;
            $infosetudiant->cne = $request->cne;
            $infosetudiant->date_naissance = $request->date_naissance;
            $infosetudiant->nationalite = $request->nationalite;
            $infosetudiant->genre = $request->genre;
            $infosetudiant->password = Hash::make($request->password);
            $infosetudiant->save();

           
            return redirect('/registration/formm')->with('success', 'Inscription réussie !');
        } catch (\Exception $e) {
            
            return redirect('/registration/formm')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Afficher le formulaire de connexion
     */
    public function loaddLoginPage2()
    {
        return view('login-page2');
    }

    
    public function LoginInfosetudiant(Request $request)
    {
      
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|min:6|max:8',
        ]);

        try {
           
            $credentials = $request->only('username', 'password');
        
            if (Auth::guard('infosetudiants')->attempt($credentials)) {
              
                return redirect('/espaceetudiant')->with('success', 'Connexion réussie.');
            } else {
               
                return redirect('/login/formm')->with('error', 'Identifiants incorrects.');
            }
        } catch (\Exception $e) {
            
            return redirect('/login/formm')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }        
    /**
     * Afficher la page d'accueil de l'étudiant
     */
    public function loaddHomePage()
    {
        return view('espaceetudiant');
    }


    public function AddInfosetudiant(Request $request){
      
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:infoetudiants',
            'phone_number' => 'required',
            'matricule' => 'required|unique:infoetudiants',
            'classe' => 'required',
            'groupe' => 'required',
            'note' => 'required',
            'annee_universitaire' => 'required',
            'cne' => 'required|unique:infoetudiants',
            'date_naissance' => 'required|date',
            'nationalite' => 'required',
            'genre' => 'required|in:Masculin,Féminin',
            'password' => 'required|confirmed|min:4|max:8',
        ]);
        try {
           
            $new_infosetudiant = new Infosetudiant;
            $new_infosetudiant->name = $request->name;
            $new_infosetudiant->email = $request->email;
            $new_infosetudiant->phone_number = $request->phone_number;
            $new_infosetudiant->matricule = $request->matricule;
            $new_infosetudiant->classe = $request->classe;
            $new_infosetudiant->groupe = $request->groupe;
           
            $new_infosetudiant->annee_universitaire = $request->annee_universitaire;
            $new_infosetudiant->cne = $request->cne;
            $new_infosetudiant->date_naissance = $request->date_naissance;
            $new_infosetudiant->nationalite = $request->nationalite;
            $new_infosetudiant->genre = $request->genre;
            $new_infosetudiant->password = Hash::make($request->password);
            $new_infosetudiant->save();

            return redirect('/infosetudiants')->with('success','infoetudiant Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/infosetudiant')->with('fail',$e->getMessage());
        }
       
        
    }
    public function Editinfosetudiant(Request $request){
       
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required',
            'matricule' => 'required',
            'classe' => 'required',
            'groupe' => 'required',
           
           'annee_universitaire' => 'required',
           'cne' => 'required',
            'date_naissance' => 'required|date',
            'nationalite' => 'required',
            'genre' => 'required|in:Masculin,Féminin',
        ]);
        try {
           
            $update_infosetudiant = Infosetudiant::where('id',$request->infosetudiant_id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'matricule' => $request->matricule,
               
                'classe' => $request->classe,
                'groupe' => $request->groupe,
                'annee_universitaire' => $request->annee_universitaire,
                'cne' => $request->cne,
                'date_naissance' => $request->date_naissance,
                'nationalite' => $request->nationalite,
                'genre' => $request->genre,
            ]); 

            return redirect('/infosetudiants')->with('success','infosetudiant Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit/infosetudiant')->with('fail',$e->getMessage());
        }
    }

    public function loadEditForm($id){
        $infosetudiant = Infosetudiant::find($id);

        return view('edit-infosetudiant',compact('infosetudiant'));
    }

    public function deleteInfosetudiant($id){
        try {
            Infosetudiant::where('id',$id)->delete();
            return redirect('/infosetudiants')->with('success','infoetudiant Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/infosetudiants')->with('fail',$e->getMessage());
            
        }
    }
    public function choisir($id)
    {
        // Rechercher l'étudiant par son ID
        $infosetudiant = Infosetudiant::find($id);
    
        // Vérifier si l'étudiant existe
        if (!$infosetudiant) {
            return redirect()->back()->with('fail', 'Étudiant non trouvé.');
        }
    
        // Récupérer les étudiants déjà sélectionnés depuis la session
        $selected_students = session()->get('infosetudiants', []);
    
        // Vérifier si l'étudiant n'est pas déjà dans la session
        if (!in_array($infosetudiant->id, collect($selected_students)->pluck('id')->toArray())) {{
            
        }
        
            // Ajouter uniquement les informations nécessaires dans la session
            $selected_students[] = $infosetudiant->toArray();
        }
    
        // Mettre à jour la session avec les étudiants sélectionnés
        session(['infosetudiants' => $selected_students]);
    
        // Rediriger vers la page des étudiants sélectionnés
        return redirect()->route('listeetudiant');
    }
    public function afficherChoisirEtudiant()
{
    // Récupérer tous les étudiants depuis la base de données
    $all_infosetudiants = Infosetudiant::all();

    // Récupérer les étudiants déjà sélectionnés depuis la session
    $selected_students = session()->get('infosetudiants', []);

    // Exclure les étudiants déjà choisis
    $all_infosetudiants = $all_infosetudiants->reject(function ($etudiant) use ($selected_students) {
        return in_array($etudiant->id, array_column(collect($selected_students)->toArray(), 'id'));





    });

    // Retourner la vue
    return view('choisiretudiant', compact('all_infosetudiants'));
   
}
public function afficherrChoisirEtudiant()
{
    // Récupérer tous les étudiants depuis la base de données
    $all_infosetudiants = Infosetudiant::all();

    // Récupérer les étudiants déjà sélectionnés depuis la session
    $selected_students = session()->get('infosetudiants', []);

    // Exclure les étudiants déjà choisis
    $all_infosetudiants = $all_infosetudiants->reject(function ($etudiant) use ($selected_students) {
        return in_array($etudiant->id, array_column(collect($selected_students)->toArray(), 'id'));


    });

    // Retourner la vue
    return view('listeetudiantlibre', compact('all_infosetudiants'));
   
}


    

public function index(Request $request)
{
    // Si des informations ont été passées à la vue avec la session
    $infosetudiant = $request->session()->get('infosetudiants', []);

    // Récupérer la liste des étudiants depuis le modèle
    $all_infosetudiants = Infosetudiant::all();

    // Passer les données à la vue
    return view('listeetudiant', compact('all_infosetudiants'));
}  
public function inddex(Request $request)
{
    // Si des informations ont été passées à la vue avec la session
    $infosetudiant = $request->session()->get('infosetudiants', []);

    // Récupérer la liste des étudiants depuis le modèle
    $all_infosetudiants = Infosetudiant::all();

    // Passer les données à la vue
    return view('noterstage', compact('all_infosetudiants'));
}  

public function indddex(Request $request)
{
    // Si des informations ont été passées à la vue avec la session
    $infosetudiant = $request->session()->get('infosetudiants', []);

    // Récupérer la liste des étudiants depuis le modèle
    $all_infosetudiants = Infosetudiant::all();

    // Passer les données à la vue
    return view('emailencadrant', compact('all_infosetudiants'));
}  


public function ajouterNote(Request $request)
{
    $matricule = $request->input('matricule');
    $note = $request->input('note');

    // Vérifier si l'étudiant existe dans la base de données
    $etudiant = Infosetudiant::where('matricule', $matricule)->first();

    if ($etudiant) {
        // Mettre à jour la note de l'étudiant dans la base de données
        $etudiant->note = $note;
        $etudiant->save();

        // Récupérer les étudiants déjà sélectionnés dans la session
        $selected_students = session()->get('infosetudiants', []);

        // Mettre à jour l'étudiant dans la session s'il est déjà sélectionné
        foreach ($selected_students as &$selected) {
            if ($selected['id'] == $etudiant->id) {
                $selected['note'] = $note;  // Mise à jour de la note dans la session
            }
        }

        // Enregistrer la session avec les étudiants mis à jour
        session(['infosetudiants' => $selected_students]);
    }

    return redirect()->back()->with('success', 'Note mise à jour avec succès');
}


    }

  