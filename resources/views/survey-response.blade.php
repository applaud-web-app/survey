@extends('layout.master')
@section('section')
<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Popular admin template you can use for your business</h1>
            </div>     
        </div>
        <div class="mb-4 border-b bg-white border-gray-200 dark:border-slate-700">
            <ul class="flex flex-wrap -mb-px  font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" id="question-tab" data-tabs-target="#question" type="button" role="tab" aria-controls="question" aria-selected="false">Questions</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                </li>
               
            </ul>
        </div>
  
        <div id="myTabContent">
            <div class="card"  id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card-body">
                    <p class="text-sm text-gray-500 dark:text-gray-400">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
            </div>
            <div class="card hidden"  id="question" role="tabpanel" aria-labelledby="question-tab">
                <div class="card-body">
                    <p class="text-sm text-gray-500 dark:text-gray-400">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
            </div>
            <div class="card hidden" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="card-body">
                    <p class="text-sm text-gray-500 dark:text-gray-400">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                </div>
            </div>
          
           
        </div>
        
    </div>
</section>
@endsection
