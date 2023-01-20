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
        // 'type',
        'etat',
        'marque',
        'modele',
        'carrosserie',
        'killometrage',
        'annee',
        'moteur',
        'couleur',
        'carburant',
        'transmission',
        'volant',
        'climatisation',
        'description',
        'image',
        'status',
        'slug',
        'user_id',
    ];

    // public function sluggable(): Array {
    //     return [
    //         'slug' => [
    //             'source' => 'marque',
    //         ]
    //     ];
    // }

  /**
   * Get the user that owns the Car
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
