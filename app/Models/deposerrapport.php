<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposerrapport extends Model
{
    use HasFactory;

    protected $fillable = [
        'rapport',
        'presentation',
        'fiche_evaluation',
        'attestation_stage',
    ];
}
