@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Survey Forms</h1>
            </div>
                <a href="{{url('add-survey-form')}}" class="px-2 py-2 lg:px-4 md:text-base text-sm border border-blue-500 bg-blue-500 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-plus"></i> Add New</a>
        </div>

        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-3 mb-3">

            @for ($i = 1; $i <= 12; $i++)
            <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-4 ">
                <div class="card h-full">
                    <div class="card-body">
                        <div class="flex justify-between">
                            <span class="focus:outline-none text-sm bg-green-50 text-green-600 dark:text-green-700 rounded font-medium py-1 px-2"><i class="fa-solid fa-crosshairs"></i> Fashion</span>

                            <div class="flex items-center">
                                <input type="checkbox" id="switch{{$i}}" class="hidden" checked="">
                                <label for="switch{{$i}}" id="switch{{$i}}" class="custom-switch switch-green relative border  border-slate-300  w-8 h-4 rounded-full bg-slate-50 dark:bg-slate-700 dark:border-slate-600 cursor-pointer"></label>
                                
                            </div>
                        </div>
                        <a href="{{url('survey-response')}}" class="my-2 block text-[20px] font-medium tracking-tight text-gray-800 hover:underline dark:text-white"><b>{{$i}}.</b> Popular admin template you can use for your business.</a>
                        <p class="font-normal text-gray-500 text-sm dark:text-gray-400">
                            It is a long established fact that a reader will be distracted by the readable content.
                        </p>
                        <blockquote class="p-1 border-s-4 border-yellow-300 bg-yellow-50 mt-2 ">
                            <p class="text-sm font-medium leading-relaxed text-yellow-900 dark:text-white">https://www.schoolofdentalnursing.com/terms-and-conditions</p>
                        </blockquote>
                        <div class="border-[0.5px] border-dashed border-slate-300 my-4 dark:border-slate-700"></div>
                        <div class="flex space-x-1 justify-end flex-wrap">   
                            <a href="#" title="Share" class="text-purple-500 hover:text-white border border-purple-500 hover:bg-purple-500 focus:ring-2 focus:outline-none focus:ring-purple-300 font-medium rounded text-sm px-3 py-1 text-center mb-1"><i class="fa-regular fa-share-from-square"></i></a>
                            <a href="#"  title="Edit"  class="text-blue-500 hover:text-white border border-blue-500 hover:bg-blue-500 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-3 py-1 text-center mb-1"><i class="fa-solid fa-up-right-from-square"></i></a>
                            <a href="#"  title="Responses"  class="text-green-500 hover:text-white border border-green-500 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 "><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#"  title="delete"  class="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 "><i class="fa-regular fa-trash-can"></i></a>
                            
                            <a href="#" title="Duplicate"  class="text-gray-500 hover:text-white border border-gray-500 hover:bg-gray-500 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 "><i class="fa-regular fa-copy"></i></a>
                        </div>
                    </div>
                </div> 
            </div>
            @endfor

        </div>
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="flex items-center justify-end -space-x-px h-10 text-base">
            <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span class="sr-only">Previous</span>
                <svg class="w-3 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span class="sr-only">Next</span>
                <svg class="w-3 h-3 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                </a>
            </li>
            </ul>
        </nav>
    </div>
</section>

   

@endsection



