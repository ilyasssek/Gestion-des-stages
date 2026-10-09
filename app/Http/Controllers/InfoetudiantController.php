<?php

namespace App\Http\Controllers;

use App\Models\Infoetudiant; //import this
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //import this for password hashing


use App\Models\PasswordReset;
use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
class InfoetudiantController extends Controller
{
    //here create all crud logic
    public function loadAllInfoetudiants(){
        $all_infoetudiants = Infoetudiant::all();
        return view('infoetudiants',compact('all_infoetudiants'));
    }
    public function loaddAllInfoetudiants(){
        $all_infoetudiants = Infoetudiant::all();
        return view('espaceetudiant',compact('all_infoetudiants'));
    }

    public function loadAddInfoetudiantForm(){
        return view('add-infoetudiant');
    }

    public function AddInfoetudiant(Request $request){
        // perform form validation here
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:infoetudiants',
            'phone_number' => 'required',
            'matricule' => 'required|unique:infoetudiants',
            'classe' => 'required',
            'groupe' => 'required',
         
            'annee_universitaire' => 'required',
            'cne' => 'required|unique:infoetudiants',
            'date_naissance' => 'required|date',
            'nationalite' => 'required',
            'genre' => 'required|in:Masculin,Féminin',
            'password' => 'required|confirmed|min:4|max:8',
        ]);
        try {
             // register user here
            $new_infoetudiant = new Infoetudiant;
            $new_infoetudiant->name = $request->name;
            $new_infoetudiant->email = $request->email;
            $new_infoetudiant->phone_number = $request->phone_number;
            $new_infoetudiant->matricule = $request->matricule;
            $new_infoetudiant->classe = $request->classe;
            $new_infoetudiant->groupe = $request->groupe;
          
            $new_infoetudiant->annee_universitaire = $request->annee_universitaire;
            $new_infoetudiant->cne = $request->cne;
            $new_infoetudiant->date_naissance = $request->date_naissance;
            $new_infoetudiant->nationalite = $request->nationalite;
            $new_infoetudiant->genre = $request->genre;
            $new_infoetudiant->password = Hash::make($request->password);
            $new_infoetudiant->save();

            return redirect('/infoetudiants')->with('success','infoetudiant Added Successfully');
        } catch (\Exception $e) {
            return redirect('/add/infoetudiant')->with('fail',$e->getMessage());
        }
       
        
    }
    public function Editinfoetudiant(Request $request){
        // perform form validation here
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
             // update user here
            $update_infoetudiant = Infoetudiant::where('id',$request->infoetudiant_id)->update([
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

            return redirect('/infoetudiants')->with('success','infoetudiant Updated Successfully');
        } catch (\Exception $e) {
            return redirect('/edit/infoetudiant')->with('fail',$e->getMessage());
        }
    }

    public function loadEditForm($id){
        $infoetudiant = Infoetudiant::find($id);

        return view('edit-infoetudiant',compact('infoetudiant'));
    }

    public function deleteInfoetudiant($id){
        try {
            Infoetudiant::where('id',$id)->delete();
            return redirect('/infoetudiants')->with('success','infoetudiant Deleted successfully!');
        } catch (\Exception $e) {
            return redirect('/infoetudiants')->with('fail',$e->getMessage());
            
        }
    }

   
  // create a function to load a login form
  public function loadLoginEtudiant(){
    return view('login-etudiant');
}

public function LoginInfoetudiant(Request $request){
    $request->validate([
        'name' => 'required',
        'password' => 'required|min:6|max:8',
    ]);
    // now allow user to login if validation was successfully
    try {
        // login logic here
        $infoetudiantCredentials = $request->only('name','password');

        if(Auth::attempt($infoetudiantCredentials)){
            // redirect user to home page
            return redirect('/espaceetudiant');
        }else{
            return redirect('/login/formm')->with('error','Wrong User Credentials');
        }
    } catch (\Exception $e) {
        return redirect('/login/formm')->with('error',$e->getMessage());
    }
} public function loadHomePage(){
    return view('espaceetudiant');
}}