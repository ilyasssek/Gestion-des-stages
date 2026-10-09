<?php
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
     // $listOfClients = Client::paginate(10);  
        return view('clients', compact('listOfClients'));
    }
}