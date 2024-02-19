@extends('layout.single-master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">
            
            <div class=" p-3 mb-3 bg-[#091734]  rounded-sm">
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="mx-auto w-[260px] ">
            </div>

            <div class="mb-4 title-card text-center">

                <img src="{{asset('assets/images/cancel.png')}}" alt="" class="mx-auto w-[120px] mb-3 ">
                <h1 class="text-3xl mb-2 text-red-500">This survey submission has now closed</h1>
             
                <p class="text-lg">While the survey submission is now closed, your engagement doesn't have to end here. We encourage you to stay connected with us through our various communication channels to stay updated on future surveys, initiatives, and developments. </p>
            </div>
           
        </div>
    </div>
</section>

@endsection



