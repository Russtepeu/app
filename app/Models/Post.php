<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user()
    {
        return$this->belongsTo('\App\Models\User');
    }

    public function categorie()
    {
        return$this->belongsTo('\App\Models\Categorie');
    }

    public function comments()
    {
        return$this->hasMany('\App\Models\Comment');
    }
    
    public function tags()
    {
        return$this->belongsTo('\App\Models\Tag');
    }
}
