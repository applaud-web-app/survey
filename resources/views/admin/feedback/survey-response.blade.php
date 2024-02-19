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
                            class="inline-block p-4 w-full rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500"><i class="fa-regular fa-rectangle-list"></i>
                            Summary</a>
                    </li>

                    <li class="w-1/2">
                        <a href="{{$individual_link}}"
                            class="inline-block p-4 w-full rounded-t-lg border-b-2 border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                            ><i class="fa-solid fa-clipboard"></i>
                            Individual</a>
                    </li>

                </ul>
            </div>

            <div>
                <div >
                    @foreach ($surveyData->survey_question_all as $item)
                        
                        @if($item->q_type==2)
                            @php
                                $cntData = DB::table('survey_user_answers')->select(DB::raw('count(id) as total'),'answer')->where('survey_question_id',$item->id)->groupBy('answer')->pluck('total','answer')->toArray();
                                $arr = [];
                                foreach(json_decode($item->q_options) as $v){
                                    $arr[] = isset($cntData[$v]) ? (int)$cntData[$v] : 0;
                                }
                            @endphp
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="text-gray-800 card-title">{{$item->question}}</h5>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{$item->survey_answer_count}} Responses</p>
                                </div>
                                <div class="card-body">
                                    <div id="area-chart-{{$item->id}}"></div>
                                </div>
                            </div>

                            <script>
                                window.addEventListener("load", function() {
                                    const getChartOptions = () => {
                                        return {
                                            series: {!!json_encode($arr)!!},
                                            // colors: ["#1C64F2", "#16BDCA", "#9061F9"],
                                            chart: {
                                                height: 300,
                                                width: "100%",
                                                type: "pie",
                                            },
                                            stroke: {
                                                colors: ["white"],
                                                lineCap: "",
                                            },
                                            plotOptions: {
                                                pie: {
                                                    labels: {
                                                        show: true,
                        
                                                    },
                                                    size: "100%",
                                                    dataLabels: {
                                                        offset: -25
                                                    }
                                                },
                                            },
                                            labels: {!!$item->q_options!!},
                                            dataLabels: {
                                                enabled: true,
                        
                                            },
                                            legend: {
                                                position: "bottom",
                        
                                            },
                                            yaxis: {
                                                labels: {
                                                    formatter: function(value) {
                                                        return value + "%"
                                                    },
                                                },
                                            },
                                            xaxis: {
                                                labels: {
                                                    formatter: function(value) {
                                                        return value + "%"
                                                    },
                                                },
                                                axisTicks: {
                                                    show: false,
                                                },
                                                axisBorder: {
                                                    show: false,
                                                },
                                            },
                                        }
                                    }
                        
                                    if (document.getElementById("area-chart-{{$item->id}}") && typeof ApexCharts !== 'undefined') {
                                        const chart = new ApexCharts(document.getElementById("area-chart-{{$item->id}}"), getChartOptions());
                                        chart.render();
                                    }
                                });
                            </script>

                        @elseif($item->q_type==3)
                            @php
                                $cntData = DB::table('survey_user_answers')->select(DB::raw('SUBSTRING_INDEX(answer, ",", 1) AS individual_value'), DB::raw('COUNT(*) AS total'))->where('survey_question_id',$item->id)->groupBy('individual_value')->pluck('total','individual_value')->toArray();
                                $arr = [];
                                foreach(json_decode($item->q_options) as $v){
                                    $arr[] = isset($cntData[$v]) ? (int)$cntData[$v] : 0;
                                }
                            @endphp
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="text-gray-800 card-title">{{$item->question}}</h5>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{$item->survey_answer_count}} Responses</p>
                                </div>
                                <div class="card-body">
                                    <div id="area-chart-{{$item->id}}"></div>
                                </div>
                            </div>
                            <script>
                                window.addEventListener("load", function() {
                                    const getChartOptions = () => {
                                        return {
                                            series: {!!json_encode($arr)!!},
                                            // colors: ["#1C64F2", "#16BDCA", "#9061F9"],
                                            chart: {
                                                height: 300,
                                                width: "100%",
                                                type: "pie",
                                            },
                                            stroke: {
                                                colors: ["white"],
                                                lineCap: "",
                                            },
                                            plotOptions: {
                                                pie: {
                                                    labels: {
                                                        show: true,
                        
                                                    },
                                                    size: "100%",
                                                    dataLabels: {
                                                        offset: -25
                                                    }
                                                },
                                            },
                                            labels: {!!$item->q_options!!},
                                            dataLabels: {
                                                enabled: true,
                        
                                            },
                                            legend: {
                                                position: "bottom",
                        
                                            },
                                            yaxis: {
                                                labels: {
                                                    formatter: function(value) {
                                                        return value + "%"
                                                    },
                                                },
                                            },
                                            xaxis: {
                                                labels: {
                                                    formatter: function(value) {
                                                        return value + "%"
                                                    },
                                                },
                                                axisTicks: {
                                                    show: false,
                                                },
                                                axisBorder: {
                                                    show: false,
                                                },
                                            },
                                        }
                                    }
                        
                                    if (document.getElementById("area-chart-{{$item->id}}") && typeof ApexCharts !== 'undefined') {
                                        const chart = new ApexCharts(document.getElementById("area-chart-{{$item->id}}"), getChartOptions());
                                        chart.render();
                                    }
                                });
                            </script>
                        @else
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="text-gray-800 card-title">{{$item->question}}</h5>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{$item->survey_answer_count}} Responses</p>
                                </div>
                                <div class="card-body">
                                    @php
                                        $ansData = DB::table('survey_user_answers')->select('answer')->where('survey_question_id',$item->id)->limit(5)->get();
                                    @endphp
                                    @foreach ($ansData as $itm)
                                        <div class="bg-gray-100 border-s-4 text-sm text-gray-800 border-gray-300 py-2 px-3 mb-2">
                                            <p>{{$itm->answer}}</p>
                                        </div>
                                    @endforeach
                                    
                                    
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@endsection