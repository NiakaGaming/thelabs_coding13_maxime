<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function testimonial()
    {
        return $this->hasOne("App\Models\Testimonial", "team_id", "id");
    }
    public function choice()
    {
        return $this->hasOne("App\Models\Choice", "team_id", "id");
    }
}
