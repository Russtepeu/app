<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categorie';

    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];

     public function posts()
  {
      return $this->hasOne('\App\Models\Post');
  }

  public function subCategorie()
  {
      return $this->hasMany('\App\Models\Post', 'parent_id')->with('categories');
  }
}
