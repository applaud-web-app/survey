@extends('layout.master')
@section('section')

<section class="content-body flex items-center ">
    
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 md:max-w-md">
        <div>
            @include('messages')
        </div>
        <div class="text-center p-6 bg-[#091734] rounded-t">
            <h3 class="font-semibold text-white text-xl mb-1">Sign Up</h3>
            <p class="text-xs text-slate-400">Sign up to continue </p>
        </div>

        <form class="p-5" id="sign_up_frm" name="sign_up_frm" action="{{url('store-sign-up')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="full_name" class="label">Name</label>
                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name" required>
            </div>
            <div class="form-group mb-3">
                <label for="phone_number" class="label">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number"  required autocomplete="new-password">
            </div>
            <div class="form-group mb-3">
                <label for="email" class="label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="form-group mb-3">
                <label for="password" class="label">Your password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password"  required autocomplete="new-password">
            </div>
           
            <div class="mt-3">
                <button type="submit" id="submit_btn"
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Sign Up
                </button>
            </div>
        </form>
        <p class="mb-5 text-sm font-medium text-center text-slate-500"> Already have an account? <a href="{{url('/')}}"
            class="font-medium text-blue-600 hover:underline">Sign In</a>
        </p>
    </div>
</section>
@endsection

@push('scripts')
    <script>
        document.getElementById('sign_up_frm').addEventListener('submit',function(){
            var elm = document.getElementById('submit_btn');
            elm.innerText = 'Processing...';
            elm.setAttribute('disabled','disabled');
        });
    </script>
@endpush