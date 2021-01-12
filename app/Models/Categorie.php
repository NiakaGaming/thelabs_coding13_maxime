<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public function article()
    {
        return $this->belongsToMany("App\Models\Article", "article_id", "id");
    }
}