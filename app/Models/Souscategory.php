<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Souscategory extends Model
{
    use HasFactory;

    protected $table = 'souscategories';
    protected $fillable = [

        'category_id',
        'nom',
        'image',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
