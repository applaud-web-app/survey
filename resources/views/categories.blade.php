@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Category</h1>

            </div>
          
              
                <a href="{{url('add-category')}}" class="px-2 py-2 lg:px-4 md:text-base text-sm border border-blue-500 bg-blue-500 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-plus"></i> Add New</a>
            
        </div>

    
           
            <div class="">
                <!-- component -->
                <div class="relative overflow-x-auto  sm:rounded">
                    <table class="w-full  text-left border text-gray-500 dark:text-gray-400">
                        <thead class="justify-between">
                            <tr class="bg-gray-800 dark:bg-slate-700">
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                   #
                                </th>
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    Title
                                </th>
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    Description
                                </th>
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    Action
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="bg-gray-200">

                            @for ($i = 1; $i <= 15; $i++)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-slate-700 hover:bg-gray-50 dark:hover:bg-slate-900/20">
                                <td class="px-5 py-3">
                                    <span>{{$i}}</span>
                                </td>
                                <td class="px-5 py-3">
                                    <span>Traditional</span>
                                </td>
                                
                                <td class="px-5 py-3">
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                                </td>
                              

                                <td class="px-5 py-3">
                                    <div class="flex items-center space-x-3">
                                        <a href="#" class="whitespace-nowrap font-medium text-blue-600 dark:text-blue-500 hover:underline"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        <a href="#" class="whitespace-nowrap font-medium text-red-600 dark:text-red-500 hover:underline"><i class="fa-solid fa-trash-can"></i> Delete</a>
                                    </div>
                                   
                                </td>   
                            </tr>
                            @endfor
                            
                           
                            
                        </tbody>
                    </table>
                </div>
                

            <nav aria-label="Page navigation example" class="mt-5">
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

    </div>
</section>



  
   

@endsection



