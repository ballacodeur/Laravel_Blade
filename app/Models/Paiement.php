<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = ['userId','montant','heureTravail', 'cjm','datePaiement'];
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
