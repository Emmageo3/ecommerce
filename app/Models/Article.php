<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\Collection;
use App\Models\Souscategory;
use App\Models\Favori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function souscategory()
    {
        return $this->belongsTo(Souscategory::class);
    }

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }

    public function favoris()
    {
        return $this->hasMany(Favori::class);
    }
}
