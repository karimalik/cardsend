<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prix',
        'negociable',
        'type',
        'etat',
        'marque',
        'modele',
        'carrosserie',
        'kilometrage',
        'annee',
        'moteur',
        'couleur',
        'carburant',
        'transmission',
        'volant',
        'climatisation',
        'description',
        'image',
    ];
}
