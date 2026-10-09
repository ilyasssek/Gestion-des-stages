<?php
namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;

class EspaceenseignantController extends Controller
{
    public function showForm()
    {
        return view('espaceenseignant', [
            'errorMsg' => session('errorMsg', ''),
            'successMsg' => session('successMsg', '')
        ]);
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Simulate saving user (replace with your DB logic)
        // User::create($validated);

        return redirect()->route('espaceenseignant.form')->with('successMsg', 'Espaceenseignant successful!');
    }

public function index()
{
    
    $enseignants = Enseignant::all();
  
    return view('enseignant.index', compact('enseignants'));
}
}
