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
      'closed',
      'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rapports()
    {
        return $this->hasMany(Rapport::class, 'generation_id');
    }
}
