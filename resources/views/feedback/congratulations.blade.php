@extends('layout.single-master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">
            
            <div class=" p-3 mb-3 bg-[#091734]  rounded-sm">
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="mx-auto w-[260px] ">
            </div>

            <div class="mb-4 title-card text-center">

                <img src="{{asset('assets/images/success.png')}}" alt="" class="mx-auto w-[120px] mb-3 ">
                <h1 class="text-3xl mb-2 text-blue-500">Your feedback has been submitted</h1>
             
                <p class="text-lg">Thank you for taking the time to share your thoughts with us. Your feedback has been submitted successfully, and we greatly appreciate your contribution. Rest assured that your input will be carefully reviewed and considered as we strive to improve our services and better meet your needs. If you have any further comments or suggestions, please don't hesitate to reach out. Once again, thank you for your valuable feedback.</p>
            </div>
           
        </div>
    </div>
</section>

@endsection



