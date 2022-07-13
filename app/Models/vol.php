<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vol extends Model
{
    use HasFactory;

    protected $table = 'vols';

    protected $fillable = [
        'code_vol',
        'date_depart',
        'heure_depart',
        'destination',
        'Nb_places_A',
        'Nb_places_B',
        'prix_classe_A',
        'prix_classe_B'
    ];
}