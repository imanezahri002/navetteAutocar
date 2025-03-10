<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;
    protected $fillable=[

        'place',
        'ville_depart',
        'ville_arrivee',
        'heure_depart',
        'heure_arrivee',
        'date_depart',
        'date_arrivee',
        'prix',
        'societe_id',

    ];
}
