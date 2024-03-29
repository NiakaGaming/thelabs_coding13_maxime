<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function categorie()
    {
        return $this->belongsToMany(Categorie::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
