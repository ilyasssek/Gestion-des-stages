<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    public function handleSignup(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|regex:/[A-Z]/',
        ], [
            'password.regex' => 'The password must contain at least one uppercase letter.',
        ]);

        // Création de l'utilisateur
        User::create([
            'firstname' => $validatedData['firstName'],
            'lastname' => $validatedData['lastName'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Message de succès et redirection
        return redirect()->back()->with('success', 'Registration successful!');
    }
}
