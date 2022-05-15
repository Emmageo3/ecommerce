<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use App\Models\Modepayment;
use App\Models\Statutcommande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function statutcommande()
    {
        return $this->belongsTo(Statutcommande::class);
    }

    public function modepayment()
    {
        return $this->belongsTo(Modepayment::class);
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
