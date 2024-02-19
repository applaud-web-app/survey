<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;

    public function survey_answer(){
        return $this->hasMany(SurveyUserAnswer::class);
    }
}
