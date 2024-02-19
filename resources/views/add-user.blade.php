@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
       

        <form action="{{url('')}}">
        <div class="card h-full">
                    <div class="card-header">
                        <h5 class="card-title"><a href="{{ url()->previous() }}"  class="text-blue-500 mr-3"><i class="fa-solid fa-arrow-left-long"></i></a> Add New User</h5>
                    </div>
                    <div class="card-body">
                        <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-3">
                            
                                <div class="form-group lg:cols-span-1 col-span-1 mb-3 ">
                                    <label for="userName" class="label">Name <span class="text-red-500">*</span></label>
                                    <input type="text" class="form-control" id="userName" placeholder="Enter  Name">
                                </div>
                          
                                <div class="form-group lg:cols-span-1 col-span-1 mb-3">
                                    <label for="mobile" class="label">Mobile Number <span class="text-red-500">*</span></label>
                                    <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile Number">
                                </div>
                                <div class="form-group lg:cols-span-1 col-span-1 mb-3">
                                    <label for="email" class="label">Email <span class="text-red-500">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email ">
                                </div>
                                <div class="form-group lg:cols-span-1 col-span-1 mb-3">
                                    <label for="password" class="label">Password <span class="text-red-500">*</span></label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                                </div>

                        
                                <div class="form-group lg:cols-span-1 col-span-1 mb-3">
                                    <label for="category" class="label">Role <span class="text-red-500">*</span></label>
                                    <select id="category" class="form-select form-control" >
                                        <option>--Select Role--</option>
                                        <option>Enabled</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                                <div class="form-group lg:cols-span-1 col-span-1 mb-3">
                                    <label for="category" class="label">Status <span class="text-red-500">*</span></label>
                                    <select id="category" class="form-select form-control" >
                                        <option>--Select Option-- </option>
                                        <option>Enabled</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                        </div>
  
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="text-white w-full text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700">Submit </button>
                    </div>
    
                </div>
            </form>
    </div>
</section>



  

@endsection



