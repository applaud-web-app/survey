@extends('layout.single-master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">

        <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto ">
            <div class=" p-3 mb-3 bg-[#091734]  rounded-sm">
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="mx-auto w-[260px] rounded-sm ">
            </div>
           
            <form action="{{url('congratulations')}}">

                <div class="mb-3 question-card ">
                 
                   <div class="form-group ">    
                        <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">1. Text box? <span class="text-red-500">*</span></label>
                        <input type="text" class="form-control" id="title" placeholder="Enter Question">
                    </div>
                 
                </div>

                <div class="mb-3 question-card ">
                 
                    <div class="form-group ">    
                         <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">2. Multiple Choice? <span class="text-red-500">*</span></label>
                       
                         <div class="flex items-center mb-2">
                            <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" >
                            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                              United States
                            </label>
                          </div>

                          <div class="flex items-center mb-2">
                            <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" >
                            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                              United States
                            </label>
                          </div>

                          <div class="flex items-center mb-2">
                            <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" >
                            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                              United States
                            </label>
                          </div>

                          <div class="flex items-center mb-2">
                            <input id="country-option-1" type="radio" name="countries" value="USA" class="w-4 h-4 border-gray-300  dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" >
                            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                              United States
                            </label>
                          </div>
                       
                       
                     </div>
                  
                 </div>

                 <div class="mb-3 question-card ">
                 
                    <div class="form-group ">    
                         <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">3. CheckBoxes? <span class="text-red-500">*</span></label>
                        
                         <label class="custom-label block  text-sm font-medium text-gray-900 dark:text-gray-300 mb-2">
                            <div class="bg-white dark:bg-slate-700 me-1 border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                              <input type="checkbox" class="hidden">
                              <i class="fas fa-check hidden text-xs text-blue-500"></i>
                            </div>
                            Blue
                        </label>
                        <label class="custom-label block  text-sm font-medium text-gray-900 dark:text-gray-300 mb-2">
                            <div class="bg-white dark:bg-slate-700 me-1 border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                              <input type="checkbox" class="hidden" >
                              <i class="fas fa-check hidden text-xs text-blue-500"></i>
                            </div>
                            Blue
                        </label>
                        <label class="custom-label block  text-sm font-medium text-gray-900 dark:text-gray-300 mb-2">
                            <div class="bg-white dark:bg-slate-700 me-1 border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                              <input type="checkbox" class="hidden" >
                              <i class="fas fa-check hidden text-xs text-blue-500"></i>
                            </div>
                            Blue
                        </label>

                     </div>
                  
                 </div>

                 <div class="mb-3 question-card ">
                 
                    <div class="form-group ">    
                         <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">4. Date <span class="text-red-500">*</span></label>
                         <input type="date" class="form-control" id="title" placeholder="Enter Question">
                     </div>
                  
                 </div>

                 <div class="mb-3 question-card ">
                 
                    <div class="form-group ">    
                         <label class="label font-medium text-gray-900 dark:text-gray-300 mb-2">5. Time <span class="text-red-500">*</span></label>
                         <input type="time" class="form-control" id="title" placeholder="Enter Question">
                     </div>
                  
                 </div>

            
                
                <div class="flex space-x-3">
                    <div class="w-full">
                        <button type="button" class="px-3 w-full py-2 mr-2 mb-2  font-medium text-gray-900 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-left-long"></i> BacK</button>
                
                    </div>
                    <div class="w-full">
                        <button type="submit" class="text-white w-full text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700">Next <i class="fa-solid fa-right-long"></i></button>
                    </div>

                </div>
            
            </form>
        </div>

    </div>
</section>

@endsection



