@extends('layout.single-master')
@section('section')
    <section class="relative content-body">
        <div class="container mx-auto ">
            <div>
                @include('messages')
            </div>
            <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">
                <div class=" p-3 mb-3 bg-[#091734]  rounded-sm">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="mx-auto w-[260px] ">
                </div>
                <div class="mb-4 title-card text-center">
                    <img src="{{ asset('assets/images/success.png') }}" alt="" class="mx-auto w-[120px] mb-3 ">
                    <h1 class="text-3xl mb-2 text-blue-500">Your feedback has been submitted</h1>
                    {{-- <p class="text-lg">Thank you for taking the time to share your thoughts with us. Your feedback has been
                        submitted successfully, and we greatly appreciate your contribution. Rest assured that your input
                        will be carefully reviewed and considered as we strive to improve our services and better meet your
                        needs. If you have any further comments or suggestions, please don't hesitate to reach out. Once
                        again, thank you for your valuable feedback.</p> --}}
                </div>
                @if($suveyUser->email==null)
                <form id="eml_frm" action="{{$encLink}}" method="post">
                    @csrf
                    <div  class="mb-3 question-card">

                    
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                            <div class="form-group mb-3">
                                <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">Name </label>
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">Email Address </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email here" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="w-1/2">
                            <button type="submit" id="submit_btn"
                            class="text-white  text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700"><i
                                class="fa-regular fa-square-check"></i> Update </button>
                        </div>
                        <div class="w-1/2 flex items-center ">
                            <div class="w-full me-3">
                                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 100%"> 100%</div>
                                </div>
                            </div>
                            <div class="whitespace-nowrap ms-3">
                                <p>Page 3 of 3</p>
                            </div>
                        </div>
                    </div>
                </form>
                @endif

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.getElementById('eml_frm').addEventListener('submit',function(){
            var elm = document.getElementById('submit_btn');
            elm.innerText = 'Processing...';
            elm.setAttribute('disabled','disabled');
        });
    </script>
@endpush
