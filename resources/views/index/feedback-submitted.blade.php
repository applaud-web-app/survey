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
                    <p class="text-lg">Thank you for taking the time to share your thoughts with us. Your feedback has been
                        submitted successfully, and we greatly appreciate your contribution. Rest assured that your input
                        will be carefully reviewed and considered as we strive to improve our services and better meet your
                        needs. If you have any further comments or suggestions, please don't hesitate to reach out. Once
                        again, thank you for your valuable feedback.</p>
                </div>
                @if($suveyUser->email==null)
                <form class="mb-3 question-card" id="eml_frm" action="{{$encLink}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">Email Address </label>
                        <input type="email" class="form-control" name="email" id="title" placeholder="Enter your email here" required>
                    </div>
                    <div class="text-end">
                        <button type="submit" id="submit_btn"
                            class="text-white  text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700"><i
                                class="fa-regular fa-square-check"></i> Submit </button>
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
