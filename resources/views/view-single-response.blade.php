@extends('layout.master')
@section('section')
<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Popular admin template you can use for your business</h1>
            </div>     
        </div>

        <div class="flow-root bg-white border-x-4 border-blue-500 p-3 lg:p-5 rounded-sm">
            <h4 class="text-lg"><a href="{{ url()->previous() }}"  class="text-blue-500 mr-3"><i class="fa-solid fa-arrow-left-long"></i></a> ID:  abc@gmail.com(#3459782)</h4>
            <hr class="mt-3">
            <ul role="list" class="divide-y space-y-3  divide-gray-200 dark:divide-gray-700">
                @for ($i = 1; $i <= 12; $i++)
                    <li class="py-3 bg-gray-50 p-3">
                        <p class=" font-medium text-gray-900 truncate dark:text-white">
                            <b>{{$i}}.</b> What is your name?
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                        Himanshu Verma
                        </p>
                    </li>
        
                @endfor
               
            </ul>
        </div>
      
    </div>
</section>
@endsection
