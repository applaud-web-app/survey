<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function survey_question(){
        return $this->hasMany(SurveyQuestion::class);
    }

    public function survey_question_all(){
        return $this->hasMany(SurveyQuestion::class)->withCount('survey_answer');
    }

}
