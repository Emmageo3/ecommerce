<?php

namespace App\Models;

use App\Models\Souscategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'nom',
        'image',
    ];

    public function souscategories()
    {
        return $this->hasMany(Souscategory::class);
    }
}
