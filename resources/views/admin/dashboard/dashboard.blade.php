@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Calendar</h1>

            </div>
            
        </div>

        

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4  mb-4">
            <div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-2 lg:col-span-2 xl:col-span-1  ">
                <div class="h-full bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 self-center">
                        <h3 class="text-slate-800 dark:text-slate-200 text-center text-2xl md:text-2xl lg:text-lg xl:text-2xl font-bold leading-8 py-2 md:py-2 lg:py-1 xl:py-2"><span class="inline-block xl:block">The School Of Dental Nursing</span></h3>
                        <div class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">We Design and Develop Clean and High Quality Web Applications</div>
                        <div class="text-center py-3 md:mb-3 lg:mb-0 xl:mb-3">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm  rounded hover:bg-blue-600">Create  New</button>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 block dark:hidden">
                        <img src="{{asset('assets/images/widgets/user.png')}}" alt="" class="px-3 mb-2 w-60 mx-auto">
                    </div>
                    <div class="md:col-span-4 lg:col-span-2 xl:col-span-4 hidden dark:block">
                        <img src="{{asset('assets/images/widgets/user-light.png')}}" alt="" class="px-3 mb-2 w-60 mx-auto">
                    </div>
                </div>
                <!--end inner-grid-->
            </div>
            <div class="sm:col-span-3 md:col-span-2 lg:col-span-2 xl:col-span-3">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden  bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-users text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1  text-2xl dark:text-slate-200">24k</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Sessions</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden  bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-clock text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1  text-2xl dark:text-slate-200">01<span class="text-sm text-slate-500">m</span>03<span class="text-sm text-slate-500">s</span></h3>
                                    <p class="text-gray-400 mb-0 font-medium">Avg.Sessions</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden  bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-activity text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1  text-2xl dark:text-slate-200">$1800</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Bounce Rate</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                    <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                        <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden  bg-no-repeat bg-contain">
                            <div class="flex justify-between xl:gap-x-2 items-cente">
                                <div class="absolute -left-6 -top-4 text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                                    <i class="ti ti-confetti text-3xl"></i>
                                </div>
                                <div class="self-center ml-auto">
                                    <h3 class="my-1  text-2xl dark:text-slate-200">75000</h3>
                                    <p class="text-gray-400 mb-0 font-medium">Goal Completions</p>
                                </div>
                            </div>
                        </div>
                        <!--end inner-grid-->
                    </div>
                </div>
            </div>
            <div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
                <div class="bg-white dark:bg-slate-800 shadow rounded-md h-full w-full p-4 relative overflow-hidden ">
                    <div class="chart-container">
                        <canvas id="bar" height="290"></canvas>
                    </div>
                </div>
                <!--end inner-grid-->
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-4">
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                <div class="card h-full">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Sessions Device</h4>
                    </div>
                    <div class="card-body">
                        <div id="ana_device" class="apex-charts"></div>
                        <h6 class="bg-slate-50 dark:bg-slate-800 py-3 px-2 mb-0 rounded-md  text-center text-slate-500 font-medium mt-3">
                            <i class="ti ti-calendar self-center text-lg mr-1"></i>
                            01 January 2022 to 31 December 2022
                        </h6>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Device
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Sassions
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Day
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Week
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Product 1 -->
                                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Dasktops
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        1843
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -3
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -12
                                                    </td>
                                                </tr>
                                                <!-- Product 2 -->
                                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Tablets
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        2543
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -5
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -2
                                                    </td>
                                                </tr>
                                                <!-- Product 2 -->
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Mobiles
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        3654
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -5
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        -6
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end inner-grid-->
            </div>
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                <div class="card h-full overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Live Visits Our New Site</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center ">
                            <p class="text-slate-400 uppercase font-medium text-sm">Right now</p>
                            <h2 class="text-slate-800 dark:text-slate-300  text-4xl font-bold leading-8 py-2">120</h2>
                            <p class="text-sm text-gray-700 whitespace-nowrap dark:text-gray-400 font-medium">
                                Yesterday Visits : 10,563 <i class="ti ti-caret-up text-green-500 text-base"></i>
                            </p>
                        </div>
                    </div>
                    <div class="p-4">
                        <div id="visitors" class="h-60 my-6"></div>
                        <div class="mt-5 text-center">
                            <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm  rounded hover:bg-blue-600">More Details</button>
                        </div>
                    </div>
                </div>
                <!--end inner-grid-->
            </div>
          
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-4">
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
                <div class="h-full card">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Total Visits</h4>
                    </div>
                    <div class="flex flex-col card-body">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Channel
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Sessions
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Prev.Period
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    % Change
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="#" class="text-blue-500">Organic search</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="#" class="text-blue-500">Direct</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-down text-red-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="#" class="text-blue-500">Referal</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="#" class="text-blue-500">Email</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-down text-red-500 text-base"></i>
                                                </td>
                                            </tr>
                                            <!-- 5 -->
                                            <tr class="bg-white dark:bg-gray-800">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <a href="#" class="text-blue-500">Social</a>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566<small class="text-gray-400">(92%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end inner-grid-->
            </div>
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
                <div class="h-full card">
                    <div class="card-header">
                        <h4 class="font-medium dark:text-slate-300">Browser Used By Users</h4>
                    </div>
                    <div class="flex flex-col card-body">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Browser
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Sessions
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Bounce Rate
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Transactions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="{{asset('assets/images/logos/chrome.png')}}" alt="" class="mr-2 h-5 inline-block">Chrome
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="{{asset('assets/images/logos/in-explorer.png')}}" alt="" class="mr-2 h-5 inline-block">Explorer
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="{{asset('assets/images/logos/safari.png')}}" alt="" class="mr-2 h-5 inline-block">Safari
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="{{asset('assets/images/logos/mozilla.png')}}" alt="" class="mr-2 h-5 inline-block">Mozilla
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                            <!-- 5 -->
                                            <tr class="bg-white dark:bg-gray-800">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="{{asset('assets/images/logos/opera.png')}}" alt="" class="mr-2 h-5 inline-block">Opera
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    10853<small class="text-gray-400">(52%)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    52.80%
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    566 <small class="text-gray-400">(92%)</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end inner-grid-->
            </div>
        </div>

    </div>
</section>



  
    <!--Start Category  Add Modal -->
    <form action="#" class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title mt-0" id="staticBackdropLabel1">Add Category</h6>
                    <button type="button" class="btn-close" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
                </div>
                <div class="modal-body ">
               
                    <div class="form-group mb-3">
                        <label for="categoryName" class="label">Category Name <span class="text-red-500">*</span></label>
                        <input type="text" class="form-control" id="categoryName" placeholder="Enter Category Name">
                    </div>
                
                </div>
                <div class="modal-footer">
                  
                    <button type="button" class="text-white bg-blue-500 hover:bg-blue-600  font-medium rounded block w-full px-3 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none  my-auto">Add Category</button>
                </div>
            </div>
        </div>
    </form>
    <div class="modal-overlay"></div>
 <!--End Category  Add Modal -->

@endsection



