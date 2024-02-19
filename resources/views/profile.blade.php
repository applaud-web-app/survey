@extends('layout.master')
@section('section')


<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">All Enquiries</h1>

            </div>
          
        </div>

        <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal Information</h4>
                    </div>
                    <div class="card-body">
                        <form>

                            <div class="form-group mb-3">
                                <label for="full_Name" class="label">Full Name</label>
                                <input type="text" id="full_Name" class="form-control" value="Rosa" placeholder="Full name" required>
                            </div>
                         
                            <div class="form-group mb-3">
                                <label for="Contact_Phone" class="label">Contact Phone</label>
                                <input type="text" id="Contact_Phone" class="form-control" value="+1 23456 7890" placeholder="Enter phone number here" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Your_Email" class="label">Your email</label>
                                <input type="email" id="Your_Email" class="form-control" value="example@example.com" placeholder="Enter your email here" required>
                            </div>
                            <div class="form-group mb-3">
                                <div class="mb-2">
                                    <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Submit</button>
                                    <button type="submit" class="btn bg-red-500 text-white hover:bg-red-600">Cancel</button>
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
                        <form> 
                            <div class="form-group mb-3">
                                <label for="New_Password" class="label">New Password</label>
                                <input type="password" id="New_Password" class="form-control"  placeholder="New Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="Confirm_Password" class="label">Confirm Password</label>
                                <input type="password" id="Confirm_Password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Change Password</button>
                                <button type="submit" class="btn bg-red-500 text-white hover:bg-red-600">Cancel</button>
                            </div>

                        </form> 
                    </div><!--end card-body-->
                </div> <!--end card-->
                
            </div>                                    
        </div><!--end grid-->

    </div>
</section>



@endsection



