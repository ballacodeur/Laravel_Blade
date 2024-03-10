<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    
    protected $fillable = ['userId','dateJour','HA','HD'];
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
