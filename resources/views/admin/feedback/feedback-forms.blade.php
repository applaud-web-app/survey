@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto">
        <div id="message_dv">
            @include('messages')
        </div>
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Survey Forms</h1>
            </div>
                <a href="{{url('admin/add-survey-form')}}" class="px-2 py-2 lg:px-4 md:text-base text-sm border border-blue-500 bg-blue-500 text-white rounded hover:bg-blue-600"><i class="fa-solid fa-plus"></i> Add New</a>
        </div>

        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-3 mb-3">
            @php
                $i=1;
            @endphp
            @forelse ($feedbacks as $item)
                @php
                    $inputObj = new stdClass();
                    $inputObj->params = 'id='.$item->id;
                    $inputObj->url = url('admin/edit-survey-form');
                    $editLink = Common::encryptLink($inputObj);

                    $inputObjD = new stdClass();
                    $inputObjD->params = 'id='.$item->id;
                    $inputObjD->url = url('admin/remove-survey-form');
                    $deleteLink = Common::encryptLink($inputObjD);

                    $inputObjS = new stdClass();
                    $inputObjS->params = 'id='.$item->id;
                    $inputObjS->url = url('admin/change-survey-status');
                    $statusLink = Common::encryptLink($inputObjS);

                    $inputObjPP = new stdClass();
                    $inputObjPP->params = 'id='.$item->id;
                    $inputObjPP->url = url('admin/duplicate-survey');
                    $dupLink = Common::encryptLink($inputObjPP);

                    $fUrl = url('feedback/'.$item->id.'/'.$item->str_slug);

                    $inputObjRRR = new stdClass();
                    $inputObjRRR->params = 'id='.$item->id;
                    $inputObjRRR->url = url('admin/survey-response');
                    $respLink = Common::encryptLink($inputObjRRR);
                @endphp
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-4 ">
                    <div class="card h-full">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <span class="focus:outline-none text-sm bg-green-50 text-green-600 dark:text-green-700 rounded font-medium py-1 px-2"><i class="fa-solid fa-crosshairs"></i> {{$item->category->category_name}}</span>

                                <div class="flex items-center">
                                    <input type="checkbox" data-id="{{$statusLink}}" id="switch{{$i}}" class="hidden status_update" {{$item->status==1 ? 'checked': ''}}>
                                    <label for="switch{{$i}}" id="switch{{$i}}" class="custom-switch switch-green relative border  border-slate-300  w-8 h-4 rounded-full bg-slate-50 dark:bg-slate-700 dark:border-slate-600 cursor-pointer"></label>
                                    
                                </div>
                            </div>
                            <a href="{{$respLink}}" class="my-2 block text-[20px] font-medium tracking-tight text-gray-800 hover:underline dark:text-white">{{$item->survey_title}}</a>
                            <p class="font-normal text-gray-500 text-sm dark:text-gray-400">
                            {{$item->description}}
                            </p>
                            <blockquote class="p-1 border-s-4 border-yellow-300 bg-yellow-50 mt-2 ">
                                <p class="text-sm font-medium leading-relaxed text-yellow-900 dark:text-white">{{$fUrl}}</p>
                            </blockquote>
                            <div class="border-[0.5px] border-dashed border-slate-300 my-4 dark:border-slate-700"></div>
                            <div class="flex space-x-1 justify-end flex-wrap">   
                                <a href="javascript:void(0);" title="Share" data-url="{{$fUrl}}" data-title="{{$item->survey_title}}" data-desc="{{$item->description}}" class="text-purple-500 hover:text-white border border-purple-500 hover:bg-purple-500 focus:ring-2 focus:outline-none focus:ring-purple-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 share_btn"><i class="fa-regular fa-share-from-square"></i></a>
                                <a href="{{$fUrl}}" target="_blank"  title="view"  class="text-blue-500 hover:text-white border border-blue-500 hover:bg-blue-500 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-3 py-1 text-center mb-1"><i class="fa-solid fa-up-right-from-square"></i></a>
                                <a href="{{$editLink}}"  title="Responses"  class="text-green-500 hover:text-white border border-green-500 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 "><i class="fa-regular fa-pen-to-square"></i></a>
                               
                                <a href="javascript:void(0)" data-id="{{$deleteLink}}"  title="delete"  class="text-red-500 hover:text-white border border-red-500 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 remove_feedback"><i class="fa-regular fa-trash-can"></i></a>
                                
                                <a href="javascript:void(0);" data-id="{{$dupLink}}" title="Duplicate"  class="text-gray-500 hover:text-white border border-gray-500 hover:bg-gray-500 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm px-3 py-1 text-center mb-1 dup_link"><i class="fa-regular fa-copy"></i></a>
                            </div>
                        </div>
                    </div> 
                </div>
                @php
                    $i++;
                @endphp
            @empty
                <div class="sm:col-span-12 mt-5 md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div class="text-center"><img src="{{asset('assets/images/nodata.png')}}" class="w-auto h-auto" style="margin:auto;"></div>
                </div>
            @endforelse


        </div>
        <div class="my-3">
            {{$feedbacks->links()}}
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        $(document).on('click',".remove_feedback",function(){
            var lnk = $(this).data('id');
            if(confirm('Are you sure ? you want to remove this data')){
                window.location.href = lnk;
            }
        });
    </script>
    <script>
        $(document).on('click','.status_update',function(){
            var status = $(this).is(":checked") ? 1 : 0;
            var link = $(this).data('id');
            $("#message_dv").html(`
                <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                Status changed successfully...
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                </button>
            </div>
            `);
            $.post(link,{"_token":"{{csrf_token()}}","status":status},function(){});
        });
    </script>

    <script>
       

        $(".share_btn").on('click',function(){
            var shareData = {
                title: $(this).data('title'),
                text: $(this).data('desc'),
                url: $(this).data('url'),
            };
            navigator.share(shareData);
        });
    </script>

    <script>
        $('.dup_link').on('click',function(){
            var link = $(this).data('id');
            if(confirm('Duplicate survey')){
                window.location.href = link;
            }
        });
    </script>

@endpush



