@extends('layout.master')
@section('section')
    <section class="relative content-body">
        <div class="container mx-auto ">
            <div>
                @include('messages')
            </div>
            <div class="flex items-center justify-between flex-wrap mb-5">
                <div class="items-center ">
                    <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Profile</h1>
                </div>
            </div>
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url('admin/update-my-profile')}}" id="profile_frm">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="full_Name" class="label">Full Name</label>
                                    <input type="text" id="full_Name" name="full_name" class="form-control" value="{{Auth::user()->name}}" placeholder="Full name" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone_number" class="label">Phone</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{Auth::user()->phone_number}}" placeholder="Enter phone number here" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email" class="label">Your email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{Auth::user()->email}}"
                                        placeholder="Enter your email here" required>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="mb-2">
                                        <button type="submit" id="submit_btn"
                                            class="btn bg-blue-500 text-white hover:bg-blue-600">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div>
                <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url('admin/update-password')}}" id="pwd_frm">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="password" class="label">New Password</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="New Password"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="confirm_password" class="label">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control"
                                        placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" id="submit_btn_pwd" class="btn bg-blue-500 text-white hover:bg-blue-600">Change
                                        Password</button>
                                    
                                </div>

                            </form>
                        </div><!--end card-body-->
                    </div> <!--end card-->

                </div>
            </div><!--end grid-->

        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.getElementById('profile_frm').addEventListener('submit',function(){
        var elm = document.getElementById('submit_btn');
        elm.innerText = 'Processing...';
        elm.setAttribute('disabled','disabled');
    });
  
    document.getElementById('pwd_frm').addEventListener('submit',function(){
        var elm = document.getElementById('submit_btn_pwd');
        elm.innerText = 'Processing...';
        elm.setAttribute('disabled','disabled');
    });
</script>
@endpush
