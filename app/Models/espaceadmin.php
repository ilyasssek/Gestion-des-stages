<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Les attributs que vous pouvez remplir via le formulaire
    protected $fillable = ['nom', 'prenom', 'email'];
}
