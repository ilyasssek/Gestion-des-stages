<?php

namespace App\Http\Controllers;

use App\Models\Liste; //import this
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //import this for password hashing

class ListeController extends Controller
{
    //here create all crud logic
    public function loadAllListes(){
        $all_listes = Liste::all();
        return view('listes',compact('all_listes'));
    }
    public function loadAlllListes(){
        $all_listes = Liste::all();
        return view('espacestudent',compact('all_listes'));
    }

    public function loadAddListeForm(){
        return view('add-liste');
    }

    public function AddListe(Request $request){
        // perform form validation here
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed|min:4|max:8',
            'classe' => 'required|string',
            'Group' => 'required|string',
            'Annee_universitaire' => 'required|string',
            'Numero_CNE' => 'required|string',
            'Matricule' => 'required|string',
            'Genre' => 'required|string',
        ]);
        try {
             // register user here
            $new_liste = new Liste;
            $new_liste->name = $request->full_name;
            $new_liste->email = $request->email;
            $new_liste->phone_number = $request->phone_number;
            $new_liste->password = Hash::make($request->password);
            $new_liste->save();
            $new_liste->classe = $request->classe;
            $new_liste->Group = $request->Group;
            $new_liste->Annee_universitaire = $request->Annee_universitaire;
            $new_liste->Numero_CNE = $request->Numero_CNE;
            $new_liste->Matricule = $request->Matricule;
            $new_liste->Genre = $request->Genre;

            return redirect('/liste')->with('success','User Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/liste')->with('fail',$e->getMessage());
        }
       
    }public function Editliste(Request $request){
        // perform form validation here
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required',
            'classe' => 'required|string',
            'Group' => 'required|string',
            'Annee_universitaire' => 'required|string',
            'Numero_CNE' => 'required|string',
            'Matricule' => 'required|string',
            'Genre' => 'required|string',
        ]);
        try {
             // update user here
            $update_liste = Liste::where('id',$request->liste_id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'classe' => $request->classe,
                'Group' => $request->Group,
                'Annee_universitaire' => $request->Annee_universitaire,
                'Numero_CNE' => $request->Numero_CNE,
                'Matricule' => $request->Matricule,
                'Genre' => $request->Genre,
            ]);

            return redirect('/liste')->with('success','User Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit/liste')->with('fail',$e->getMessage());
        }
    }

    public function loadEditForm($id){
        $liste = Liste::find($id);

        return view('edit-liste',compact('liste'));
    }

    public function deleteliste($id){
        try {
            Liste::where('id',$id)->delete();
            return redirect('/liste')->with('success','Liste Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/liste')->with('fail',$e->getMessage());
            
        }
    }
}