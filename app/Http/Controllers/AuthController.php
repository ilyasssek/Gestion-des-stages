<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //here load a registration form
    public function loadRegisterForm(){
        return view("register-form");
    }

    public function registerUser(Request $request){
        // perform validation here
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:6|max:8|confirmed',
        ]);
        // then if validation is successfully bypassed register user
        // put the whole logic in a try and catch block
        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make( $request->password );
            $user->save();
            return redirect('/registration/form')->with('success','You Have been Registered Successfully!');
        } catch (\Exception $e) {
            return redirect('/registration/form')->with('error',$e->getMessage());
            
        }
       
    }

    // create a function to load a login form
    public function loadLoginPage(){
        return view('login-page');
    }

    public function LoginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:8',
        ]);
        // now allow user to login if validation was successfully
        try {
            // Authentification pour la table `infosetudiants` avec le guard personnalisé
            $credentials = $request->only('username', 'password');
        
            if (Auth::guard('users')->attempt($credentials)) {
                // Redirection vers l'espace étudiant en cas de succès
                return redirect('/Admin')->with('success', 'Connexion réussie.');
            } else {
                // Message en cas d'erreur d'identifiants
                return redirect('/login/form')->with('error', 'Identifiants incorrects.');
            }
        } catch (\Exception $e) {
            // Gestion des erreurs et redirection avec un message approprié
            return redirect('/login/form')->with('error', 'Erreur : ' . $e->getMessage());
        }
    }        
        
    // create function to load home page
    public function loadHomePage(){
        return view('Admin');
    }

    // perform logout function here
    public function LogoutUser(Request $request){
        Session::flush();
        Auth::logout();
        return redirect('/login/form');
    }

    // create forgot password function here to load a page
    public function forgotPassword(){
        return view('forgot-password');
    }

    // perform email sending logic here
    public function forgot(Request $request){
        // validate here
        $request->validate([
            'email' => 'required'
        ]);
        // check if email exist
        $user = User::where('email',$request->email)->get();

        foreach ($user as $value) {
            # code...
        }


    }






}