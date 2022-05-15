<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Statutcommande extends Model
{
    use HasFactory;

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
