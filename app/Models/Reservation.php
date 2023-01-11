<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'nom',
        'prenom',
        'num_piece',
        'sexe',
        'classe',
        'code_vol'
    ];

    public function vols()
    {
        return $this->belongsTo(Vol::class, 'code_vol', 'id');
    }

}
