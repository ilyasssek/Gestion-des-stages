<?php
namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;

class signupController extends Controller
{
    public function showForm()
    {
        return view('signup', [
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

        return redirect()->route('signup.show')->with('successMsg', 'signup successful!');
    }

    public function index()
    {
        $signups = Signup::all();
        return view('signup.index', compact('signups'));
    }
}
