<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyUser extends Model
{
    use HasFactory;

    public function survey_answer(){
        return $this->hasMany(SurveyUserAnswer::class,'survery_user_id','id');
    }
}
