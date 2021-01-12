<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany("App\Models\User", "user_id", "id");
    }
    public function tag()
    {
        return $this->belongsTo("App\Models\Tag", "tag_id", "id");
    }
    public function categorie()
    {
        return $this->belongsTo("App\Models\Categorie", "categorie_id", "id");
    }
}
