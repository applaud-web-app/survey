@extends('layout.master')
@section('section')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <section class="relative content-body">
        <div class="container mx-auto ">
            <div class="flex items-center justify-between flex-wrap mb-5">
                <div class="items-center ">
                    <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">{{$surveyData->survey_title}}</h1>
                </div>
            </div>
            <div class="mb-4 border-b bg-white border-gray-200 dark:border-slate-700">
                <ul class="flex flex-wrap -mb-px  font-medium text-center">
                    <li class="w-1/2">

                        <a href="{{$summary_link}}"
                            class="inline-block p-4 w-full rounded-t-lg border-b-2 border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            ><i class="fa-solid fa-clipboard"></i>
                            Summary</a>

                       
                    </li>

                    <li class="w-1/2">
                        <a href="{{$individual_link}}"
                        class="inline-block p-4 w-full rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500"><i class="fa-regular fa-rectangle-list"></i>
                        Individual</a>
                    </li>

                </ul>
            </div>

            <div>
                <div>
                    <div >
                        <div class="mb-5">
                            {{$surveyIndividual->onEachSide(50)->appends(request()->input())->links('custom-pagination')}}
                        </div>
    
                        <div class="card">
                            <div class="card-body">
                                @if(isset($surveyIndividual[0]))
                                <h4 class="text-lg">ID: {{$surveyIndividual[0]->id}}</h4>
                                <h5 class="text-sm">Email: {{$surveyIndividual[0]->email!=null ? $surveyIndividual[0]->email : '-'}}</h5>
                                @endif
                                <hr class="mt-3">
                                <ul role="list" class="divide-y space-y-3  divide-gray-200 dark:divide-gray-700">
                                    @php
                                        $i=1
                                    @endphp
                                    @foreach ($surveyIndividual as $value)
                                        @foreach ($value->survey_answer as $item)
                                            <li class="py-3 bg-gray-50 p-3">
                                                <p class=" font-medium text-gray-900 truncate dark:text-white">
                                                    <b>{{ $i }}.</b> {{$item->question}}
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    {{$item->answer}}
                                                </p>
                                            </li>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    @endforeach
                                    
                                </ul>
                            </div>
    
                        </div>
                    </div>
    
                </div>
            </div>

        </div>
    </section>
@endsection