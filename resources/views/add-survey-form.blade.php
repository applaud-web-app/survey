@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">

        <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">

            <form action="{{url('')}}">

                <div class="mb-4 title-card">

                    <div >
                        <div class="relative z-0 mb-5 w-full group">
                            <input type="text"  name="floating_title" id="floating_title" class="block text-2xl py-2.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                            <label for="floating_title" class="absolute text-lg text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Enter Title</label>
                        </div>
                        <div class="grid xl:grid-cols-2 xl:gap-5">
                            <div class="relative z-0 mb-3 w-full group">
                                <input type="datetime-local" name="starting_date" id="starting_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="starting_date" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Start Date</label>
                            </div>
                            <div class="relative z-0 mb-3 w-full group">
                                <input type="datetime-local" name="ending_date" id="ending_date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                                <label for="ending_date" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">End Date</label>
                            </div>
                          </div>

                        <div class="relative z-0 mb-4 w-full group">
                            
                            <select id="floating_category" class="block py-2.5 text-sm px-1 w-full  text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"" aria-label="Default select example" required="">
                                <option>Select Category</option>
                                <option>Category Name 1</option>
                                <option>Category Name 2</option>
                                <option>Category Name 3</option>
                                <option>Category Name 4</option>
                                <option>Category Name 5</option>
                                <option>Category Name 6</option>
                            </select>
                           
                        </div>

                        <div class="relative z-0  w-full group">
                            <textarea rows="4" name="floating_description" id="floating_description" class="block py-2.5 px-0 w-full  text-gray-900 bg-transparent border-0 border-b border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required=""></textarea>
                            <label for="floating_description" class="absolute  text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                        </div>
                    </div>
                </div>
    
                <div class="mb-3 question-card ">
                   
                 
                    <div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3">
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                               
                                    <label for="title" class="label">Question 1 <span class="text-red-500">*</span></label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Question">
                               
                            </div>
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                               
                                <label for="questiontype" class="label">Type <span class="text-red-500">*</span></label>
                                <select id="category" class="form-select form-control" >
                                    <option>--Choose Option--</option>
                                    <option>Textbox</option>
                                    <option>Multiple Choice</option>
                                    <option>Checkboxes</option>
                                    <option>Dropdown</option>
                                    <option>Date</option>
                                    <option>Time</option>
                                </select>
                           
                            </div>
                        </div>
                        <hr class="my-3">
                        <h5 class="mb-2">Textbox</h5>
                        <div class="form-group mb-3">
                         
                            <input type="text" class="form-control" id="textfield" placeholder="Enter text">
                        </div>

                        
                    </div>
                </div>
                
                <div class="mb-3 question-card ">
                    <div class="text-end absolute right-1 top-1">
                        <button type="button" class="text-white w-6 h-6 mb-2 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <i class="fa-solid fa-xmark"></i>
                          </button>
                    </div>
                    <div >
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3">
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                               
                                    <label for="title" class="label">Question 2 <span class="text-red-500">*</span></label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Question">
                               
                            </div>
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                               
                                <label for="questiontype" class="label">Type <span class="text-red-500">*</span></label>
                                <select id="category" class="form-select form-control" >
                                    <option>--Choose Option--</option>
                                    <option>Textbox</option>
                                    <option>Multiple Choice</option>
                                    <option>Checkboxes</option>
                                
                                    <option>Date</option>
                                    <option>Time</option>
                                </select>
                           
                            </div>
                        </div>
                        <hr class="my-3">
                        <div class="flex justify-between  ">
                            <h5 class="mb-2">Multiple Choice</h5>
                            <button type="button" class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded text-sm px-3 py-1 text-center mb-2 "><i class="fa-solid fa-plus"></i> Add More</button>
                        </div>
                        
    
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-3">
                            <div>
                                <input type="text" class="form-control" id="check_options" placeholder="Enter Options">
                            </div>
                            <div>
                                <input type="text" class="form-control" id="check_options" placeholder="Enter Options">
                            </div>
                           
                            <div class="flex space-x-1">
                                <input type="text" class="form-control" id="check_options" placeholder="Enter Options">
                                <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="flex space-x-1">
                                <input type="text" class="form-control" id="check_options" placeholder="Enter Options">
                                <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="flex space-x-1">
                                <input type="text" class="form-control" id="check_options" placeholder="Enter Options">
                                <button type="button" class=" focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="flex space-x-1">
                                <input type="text" class="form-control" id="check_options" placeholder="Enter Options">
                                <button type="button" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded text-sm px-3 py-2  dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>

                <div class="mb-3 question-card ">
                    <div class="text-end absolute right-1 top-1">
                        <button type="button" class="text-white w-6 h-6 mb-2 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <i class="fa-solid fa-xmark"></i>
                          </button>
                    </div>
                  
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3">
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                               
                                    <label for="title" class="label">Question 3 <span class="text-red-500">*</span></label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Question">
                               
                            </div>
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                               
                                <label for="questiontype" class="label">Type <span class="text-red-500">*</span></label>
                                <select id="category" class="form-select form-control" >
                                    <option>--Choose Option--</option>
                                    <option>Textbox</option>
                                    <option>Multiple Choice</option>
                                    <option>Checkboxes</option>
                                    <option>Dropdown</option>
                                    <option>Date</option>
                                    <option>Time</option>
                                </select>
                           
                            </div>
                        </div>
                        <hr class="my-3">
                        <h5 class="mb-2">Date</h5>
                        <div class="form-group mb-3">
                         
                            <input type="date" class="form-control" id="datefield" placeholder="Enter date" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3 question-card ">
                    <div class="text-end absolute right-1 top-1">
                        <button type="button" class="text-white w-6 h-6 mb-2 bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center  dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <i class="fa-solid fa-xmark"></i>
                          </button>
                    </div>
                  
                    <div >
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-3">
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                               
                                    <label for="title" class="label">Question 4 <span class="text-red-500">*</span></label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Question">
                               
                            </div>
                            <div class="form-group mb-3 sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 ">
                               
                                <label for="questiontype" class="label">Type <span class="text-red-500">*</span></label>
                                <select id="category" class="form-select form-control" >
                                    <option>--Choose Option--</option>
                                    <option>Textbox</option>
                                    <option>Multiple Choice</option>
                                    <option>Checkboxes</option>
                                    <option>Dropdown</option>
                                    <option>Date</option>
                                    <option>Time</option>
                                </select>
                           
                            </div>
                        </div>
                        <hr class="my-3">
                        <h5 class="mb-2">Time</h5>
                        <div class="form-group mb-3">
                         
                            <input type="time" class="form-control" id="timefield" placeholder="Enter time" disabled>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-3">
                    <div class="w-full">
                        <button type="button" class="px-3 w-full py-2 mr-2 mb-2  font-medium text-gray-900 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Add Question</button>
                
                    </div>
                    <div class="w-full">
                        <button type="submit" class="text-white w-full text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700"><i class="fa-solid fa-check"></i> Save </button>
                    </div>
               
                 
                </div>
            
            </form>
        </div>

      

     
           
    </div>
</section>



  

@endsection



