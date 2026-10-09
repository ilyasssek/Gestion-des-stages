<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class EspaceAdminController extends Controller
{
    public function showForm()
    {
        return view('espaceadmin', [
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

        return redirect()->route('espaceadmin.form')->with('successMsg', 'espaceadmin successful!');
    }

public function index()
{
    
    $admins = Admin::all();
  
    return view('admin.index', compact('admin'));
}
}
