<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ferme extends Model
{
    use HasFactory;
    protected $table = 'fermes';
    protected $fillable = [
      'nom',
      'adresse',
      'description',
      'statut'
    ];
}
