<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;
    protected $table = 'rapports';
    protected $fillable = [
      'user_id',
      'generation_id',
      'avec_mortalite',
      'mortalite',
      'cause_mortalite',
      'commentaire',
      'statut'
    ];
}
