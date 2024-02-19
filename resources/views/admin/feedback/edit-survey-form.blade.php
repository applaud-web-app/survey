@extends('layout.master')
@section('section')
    <section class="relative content-body">
        <div class="container mx-auto ">
            <div>
                @include('messages')
            </div>
            <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">

                <form action="{{$updateLink}}" method="post" id="survey_frm">
                    @csrf

                    <div class="mb-4 title-card">

                        <div>
                            <div class="relative z-0 mb-5 w-full group">
                                <input type="text" name="survey_title" id="survey_title"
                                    class="block text-2xl py-2.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " required="" value="{{$feedbackData->survey_title}}">
                                     <label for="survey_title"  class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Title</label>
                            </div>
                            <div class="grid xl:grid-cols-2 xl:gap-5">
                                <div class="relative z-0 mb-3 w-full group">
                                    <input type="datetime-local" name="start_date" id="start_date"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required="" value="{{$feedbackData->start_date}}">
                                    <label for="start_date"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Start
                                        Date</label>
                                </div>
                                <div class="relative z-0 mb-3 w-full group">
                                    <input type="datetime-local" name="end_date" id="end_date"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " value="{{$feedbackData->end_date}}">
                                    <label for="end_date"
                                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">End
                                        Date</label>
                                </div>
                            </div>

                            <div class="relative z-0 mb-4 w-full group">

                                <select name="category" class="block py-2.5 text-sm px-1 w-full  text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    aria-label="Default select example" required="">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}" {{$feedbackData->category_id==$item->id ? 'selected':''}}>{{$item->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="relative z-0  w-full group">
                                <textarea rows="4" name="description" id="description"
                                    class="block py-2.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" ">{{$feedbackData->description}}</textarea>
                                <label for="description"
                                    class="absolute  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                            </div>
                        </div>
                    </div>

                    <div id="add_mre">
                        @php
                            $i=0;
                        @endphp
                        @foreach ($feedbackData->survey_question as $val)
                            @php
                                $inputObj = new stdClass();
                                $inputObj->params = 'id='.$val->id;
                                $inputObj->url = url('admin/remove-survey-question');
                                $removeLink = Common::encryptLink($inputObj);
                            @endphp
                            <div class="mb-3 question-card">
                                <div class="text-end absolute right-1 top-1">
                                    <button data-id="{{$removeLink}}" type="button" class="text-white w-6 h-6 mb-2 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 remove_question_a">
                                        <i class="fa-solid fa-xmark"></i>
                                      </button>
                                </div>
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                                            <label for="question_up_{{$val->id}}" class="label">Question<span class="text-red-500">*</span></label>
                                            <input type="text" class="form-control" id="question_up_{{$val->id}}" name="question_up[{{$val->id}}]" placeholder="Enter Question" required value="{{$val->question}}">
                                        </div>
                                        <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                                            <label for="q_type_up_{{$val->id}}" class="label">Type <span class="text-red-500">*</span></label>
                                            <select id="q_type_up_{{$val->id}}" data-id="{{$val->id}}" name="q_type_up[{{$val->id}}]" class="form-select form-control q_type" required>
                                                <option value="">--Choose Option--</option>
                                                <option value="1" {{$val->q_type==1 ? 'selected':''}}>Textbox</option>
                                                <option value="2" {{$val->q_type==2 ? 'selected':''}}>Multiple Choice</option>
                                                <option value="3" {{$val->q_type==3 ? 'selected':''}}>Checkboxes</option>
                                                <option value="4" {{$val->q_type==4 ? 'selected':''}}>Date</option>
                                                <option value="5" {{$val->q_type==5 ? 'selected':''}}>Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="opt_box">
                                        @if(in_array($val->q_type,[2,3]))
                                            @php
                                                $qData = json_decode($val->q_options);
                                            @endphp
                                            <hr class="my-3">
                                            <div class="flex justify-between opt_prnt">
                                                <h5 class="mb-2">Multiple Choice</h5>
                                                <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm px-3 py-1 text-center mb-2 add_more_opt" data-up="1" data-id="{{$val->id}}"><i class="fa-solid fa-plus"></i> Add More</button>
                                            </div> 
                                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-3 opt_more_dv">
                                                @foreach ($qData as $k=>$item)
                                                    @if($k<2)
                                                        <div>
                                                            <input type="text" class="form-control" value="{{$item}}" name="options_up[{{$val->id}}][]" placeholder="Enter Options" required>
                                                        </div>
                                                    @else
                                                        <div class="flex space-x-1 prnt_rmv">
                                                            <input type="text" class="form-control" name="options_up[{{$val->id}}][]" placeholder="Enter Options" value="{{$item}}">
                                                            <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800 rmv_btn"><i class="fa-solid fa-xmark"></i></button>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        


                    </div>

                    
                    <div class="mb-3 question-card">
                        <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                            <label for="additional_note" class="label">Additional Note</label>
                            <textarea class="form-control" id="additional_note" name="additional_note" placeholder="Enter Note" rows="5">{{$feedbackData->additional_note}}</textarea>
                        </div>
                    </div>

                    <div class="flex space-x-3">
                        <div class="w-full">
                            <button type="button" id="add_q_btn" class="px-3 w-full py-2 mr-2 mb-2  font-medium text-gray-900 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Add Question</button>
                        </div>
                        <div class="w-full">
                            <button type="submit" id="submit_btn"
                                class="text-white w-full text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700"><i
                                    class="fa-solid fa-check"></i> Save </button>
                        </div>


                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#survey_frm").on('submit',function(){
            var el = document.getElementById('submit_btn');
            el.innerText = "Processing...";
            el.setAttribute('disabled','disabled');
        })
    </script>
    <script>
        $(document).on('change','.q_type',function(){
            var prnt = $(this).parents('.question-card');
            var vl = $(this).val();
            prnt.find('.opt_box').html('');
            var cnt = $(this).data('id');
            if(vl!=''){
                if(vl==2 || vl==3){
                    prnt.find('.opt_box').html(`
                    <hr class="my-3">
                        <div class="flex justify-between opt_prnt">
                            <h5 class="mb-2">Multiple Choice</h5>
                            <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm px-3 py-1 text-center mb-2 add_more_opt" data-id="${cnt}" data-up="2"><i class="fa-solid fa-plus"></i> Add More</button>
                        </div>    
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-3 opt_more_dv">
                            <div>
                                <input type="text" class="form-control" name="options[${cnt}][]" placeholder="Enter Options" required>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="options[${cnt}][]"  placeholder="Enter Options" required>
                            </div>
                            
                        </div>
                    `);
                }
            }
        })
    </script>

    <script>
        $(document).on('click','.add_more_opt',function(){
            var elm = $(this).parents('.opt_prnt');
            var id = $(this).data('id');
            var id_up = $(this).data('up');
            if(id_up==1){
                elm.next('.opt_more_dv').append(`
                    <div class="flex space-x-1 prnt_rmv">
                        <input type="text" class="form-control" name="options_up[${id}][]" placeholder="Enter Options">
                        <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800 rmv_btn"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                `);
            }else{
                elm.next('.opt_more_dv').append(`
                <div class="flex space-x-1 prnt_rmv">
                    <input type="text" class="form-control" name="options[${id}][]" placeholder="Enter Options" required>
                    <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800 rmv_btn"><i class="fa-solid fa-xmark"></i></button>
                </div>
            `);
            }
            
        });
       
    </script>
    <script>
        var x = 1;
        $("#add_q_btn").on('click',function(){
            $("#add_mre").append(`
                <div class="mb-3 question-card">
                    <div class="text-end absolute right-1 top-1">
                        <button type="button" class="text-white w-6 h-6 mb-2 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 rmv_mn_dv">
                            <i class="fa-solid fa-xmark"></i>
                            </button>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3">
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                                <label for="question_${x}" class="label">Question<span class="text-red-500">*</span></label>
                                <input type="text" class="form-control" id="question_${x}" name="question[${x}]" placeholder="Enter Question" required>
                            </div>
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                                <label for="q_type_${x}" class="label">Type <span class="text-red-500">*</span></label>
                                <select id="q_type_${x}" data-id="${x}" name="q_type[${x}]" class="form-select form-control q_type" required>
                                    <option value="">--Choose Option--</option>
                                    <option value="1">Textbox</option>
                                    <option value="2">Multiple Choice</option>
                                    <option value="3">Checkboxes</option>
                                    <option value="4">Date</option>
                                    <option value="5">Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="opt_box">
                        </div>
                    </div>
                </div>
            `);
            x++;
        });
    </script>
    <script>
        $(document).on('click',".rmv_btn",function(){
            $(this).parents('.prnt_rmv').remove();
        });
    </script>
    <script>
        $(document).on('click',".rmv_mn_dv",function(){
            $(this).parents('.question-card').remove();
        });
    </script>
    <script>
        $(document).on('click','.remove_question_a',function(){
            var link = $(this).data('id');
            if(confirm('Are you sure ? you want to remove this survey')){
                window.location.href = link;
            }
        })
    </script>
@endpush
