<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    use HasFactory;
    protected $table = 'generations';
    protected $fillable = [
      'user_id',
      'date_arrive',
      'effectif',
      'race',
      'poids_moyen',
      'statut'
    ];
}
