<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class,'login']);
Route::get('/sign-up', [MainController::class,'signUp']);
Route::post('/store-sign-up', [MainController::class,'storeSignUp']);
Route::post('/check-login', [MainController::class,'checkLogin']);
Route::get('/logout', [MainController::class,'logout']);


Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){
    Route::get('/dashboard', [DashboardController::class,'dashboard']);
    Route::get('/feedback-forms', [FeedbackController::class,'feedbackForms']);
    Route::get('/add-survey-form', [FeedbackController::class,'addSurveyForm']);
    Route::post('/store-survey-form', [FeedbackController::class,'storeSurveyForm']);
    Route::get('/edit-survey-form', [FeedbackController::class,'editSurveyForm']);
    Route::post('/update-survey-form', [FeedbackController::class,'updateSurveyForm']);
    Route::get('/remove-survey-question', [FeedbackController::class,'removeSurveyQuestion']);
    Route::get('/remove-survey-form', [FeedbackController::class,'removeSurveyForm']);
    Route::post('/change-survey-status', [FeedbackController::class,'changeSurveyStatus']);
    Route::get('/duplicate-survey', [FeedbackController::class,'duplicateSurvey']);
    Route::get('/survey-response', [FeedbackController::class,'surveyResponse']);
    Route::get('/survey-response-individual', [FeedbackController::class,'surveyResponseIndividual']);

    Route::get('/profile', [MainController::class,'profile']);
    Route::post('/update-my-profile', [MainController::class,'updateMyProfile']);
    Route::post('/update-password', [MainController::class,'updatePassword']);
});

Route::group(['middleware'=>['auth','checkAdmin'],'prefix'=>'admin'],function(){
    Route::get('/add-category', [DashboardController::class,'addCategory']);
    Route::post('/store-category', [DashboardController::class,'storeCategory']);
    Route::get('/all-categories', [DashboardController::class,'allCategories']);
    Route::get('/edit-category', [DashboardController::class,'editCategory']);
    Route::post('/update-category', [DashboardController::class,'updateCategory']);
    Route::get('/remove-category', [DashboardController::class,'removeCategory']);
    Route::get('/add-user', [UserController::class,'addUser']);
    Route::get('/all-users', [UserController::class,'allUsers']);
    Route::get('/edit-user', [UserController::class,'editUser']);
    Route::post('/update-user', [UserController::class,'updateUser']);
    Route::get('/remove-user', [UserController::class,'removeUser']);
});


Route::group(['middleware'=>['revalidateHistory']],function(){
    Route::get('feedback/{id}/{slug}',[IndexController::class,'feedback']);
    Route::get('feedback-process/{id}/{slug}',[IndexController::class,'feedbackProcess']);
    Route::post('save-feedback',[IndexController::class,'saveFeedback']);
    Route::get('feedback-submitted/{id}/{slug}',[IndexController::class,'feedbackSubmitted']);
    Route::post('save-feedback-email',[IndexController::class,'saveFeedbackEmail']);
});

Route::get('/terms-conditions', [MainController::class,'termsConditions']);
Route::get('/privacy-policy', [MainController::class,'privacyPolicy']);


Route::get('/forget-password', [IndexController::class,'forgetPassword']);
Route::post('/send-reset-link', [IndexController::class,'sendResetLink']);
Route::get('/reset-password', [IndexController::class,'resetPassword']);
Route::post('/store-reset-password', [IndexController::class,'storeResetPassword']);




// Route::get('/dashboard', [MainController::class,'dashboard']);
// Route::get('/add-category', [MainController::class,'addCategory']);
// Route::get('/categories', [MainController::class,'categories']);
// Route::get('/add-survey-form', [MainController::class,'addSurveyForm']);
// Route::get('/survey-forms', [MainController::class,'surveyForms']);
// Route::get('/add-user', [MainController::class,'addUser']);
// Route::get('/users', [MainController::class,'users']);

// Route::get('/profile', [MainController::class,'profile']);
// Route::get('/feedback-form', [MainController::class,'feedbackForm']);
// Route::get('/feedback-start', [MainController::class,'feedbackStart']);
// Route::get('/congratulations', [MainController::class,'congratulations']);
// Route::get('/survey-end', [MainController::class,'surveyEnd']);
// Route::get('/survey-response', [MainController::class,'surveyResponse']);
