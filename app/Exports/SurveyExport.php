<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\SurveyUser;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class SurveyExport implements FromView,ShouldAutoSize
{

    protected $surveyData;

    function __construct($surveyData) {
            $this->surveyData = $surveyData;
    }
    
    public function view(): View
    {
        $surveyAnsData = SurveyUser::select('created_at','id')->with('survey_answer')->where('survey_id',$this->surveyData->id)->get();
        return view('admin.feedback.survey-export', [
            'question_data' => $this->surveyData->survey_question,
            'surveyAnsData'=>$surveyAnsData
        ]);
    }
}
