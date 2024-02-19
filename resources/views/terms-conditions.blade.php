@extends('layout.master')
@section('section')

<section class="relative content-body">
    <div class="container mx-auto ">
        <div class="flex items-center justify-between flex-wrap mb-5">
            <div class="items-center ">
                <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Terms And Conditions</h1>

            </div>
          
        </div>

        <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
            <h5 class="text-lg  mb-4">Overview :</h5>
            <p class="text-slate-400">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text.</p>
            <p class="text-slate-400">In the 1960s, the text suddenly became known beyond the professional circle of typesetters and layout designers when it was used for Letraset sheets (adhesive letters on transparent film, popular until the 1980s) Versions of the text were subsequently included in DTP programmes such as PageMaker etc.</p>
            <p class="text-slate-400">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories.</p>
        
            <h5 class="text-lg  mb-4 mt-6">We use your information to :</h5>
            <ul class="list-none text-slate-400 mt-4">
                <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Our Talented &amp; Experienced Marketing Agency</li>
                <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Create your own skin to match your brand</li>
                <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Digital Marketing Solutions for Tomorrow</li>
                <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Our Talented &amp; Experienced Marketing Agency</li>
                <li class="flex mt-2"><i class="uil uil-arrow-right text-indigo-600 text-lg align-middle me-2"></i>Create your own skin to match your brand</li>
            </ul>

            <h5 class="text-lg  mb-4 mt-6">Information Provided Voluntarily :</h5>
            <p class="text-slate-400">In the 1960s, the text suddenly became known beyond the professional circle of typesetters and layout designers when it was used for Letraset sheets (adhesive letters on transparent film, popular until the 1980s) Versions of the text were subsequently included in DTP programmes such as PageMaker etc.</p>

           
        </div>

    </div>
</section>



  
    <!--Start Category  Add Modal -->
    <form action="#" class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-dialog-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title mt-0" id="staticBackdropLabel1">Add Category</h6>
                    <button type="button" class="btn-close" aria-label="Close"><i class="fa-regular fa-circle-xmark"></i></button>
                </div>
                <div class="modal-body ">
               
                    <div class="form-group mb-3">
                        <label for="categoryName" class="label">Category Name <span class="text-red-500">*</span></label>
                        <input type="text" class="form-control" id="categoryName" placeholder="Enter Category Name">
                    </div>
                
                </div>
                <div class="modal-footer">
                  
                    <button type="button" class="text-white bg-blue-500 hover:bg-blue-600  font-medium rounded block w-full px-3 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none  my-auto">Add Category</button>
                </div>
            </div>
        </div>
    </form>
    <div class="modal-overlay"></div>
 <!--End Category  Add Modal -->

@endsection



