<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminSignupController extends Controller
{
    public function showForm()
    {
        return view('signup');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        try {
            $user = User::create([
                'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => 'etudiant'
            ]);

            Log::info('Nouvel étudiant inscrit', ['id' => $user->id, 'email' => $user->email]);

            return redirect()->route('admin.signup.show')
                ->with('success', 'L\'étudiant a été inscrit avec succès !');
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'inscription d\'un étudiant', [
                'error' => $e->getMessage(),
                'email' => $validated['email']
            ]);

            return back()
                ->withInput()
                ->withErrors(['error' => 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.']);
        }
    }
}
