@extends('layout.single-master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">
            <div class=" p-3 mb-3 bg-[#091734]  rounded-sm">
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="mx-auto w-[260px] ">
            </div>
            <div class="mb-4 title-card">
                <h1 class="text-3xl mb-3">{{$feedbackData->survey_title}}</h1>
                {{-- <h5 class="text-lg mb-1">Category: <span class="text-blue-500">{{$feedbackData->category->category_name}}</h5> --}}
                <p class="text-lg">{{$feedbackData->description}}</p>
            </div>
            <div class="flex space-x-3">
                <div class="w-1/2">
                    <a href="{{$nextLink}}" class="text-white  text-center bg-blue-500 hover:bg-blue-600 focus:ring-2 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700">Start <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="w-1/2 flex items-center ">
                    <div class="w-full me-3">
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center py-0.5 leading-none rounded-full" style="width: 0%"> 0%</div>
                        </div>
                    </div>
                    <div class="whitespace-nowrap ms-3">
                        <p>Page 1 of 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection



