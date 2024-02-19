@extends('layout.master')
@section('section')
    <section class="relative content-body">
        <div class="container mx-auto">
            <form action="{{$updateLink}}" method="post" id="category_frm" name="category_frm">
                @csrf
                <div class="card h-full">
                    <div class="card-header">
                        <h5 class="card-title"><a href="{{ url()->previous() }}" class="text-blue-500 mr-3"><i class="fa-solid fa-arrow-left-long"></i></a> Edit category</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="category_name" class="label">Name <span class="text-red-500">*</span></label>
                            <input type="text" value="{{$category->category_name}}" class="form-control" id="category_name" name="category_name" placeholder="Enter category Name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="label">Description<span class="text-red-500">*</span></label>
                            <textarea type="text" class="form-control" rows="8" id="description" name="description" placeholder="Enter category Description">{{$category->description}}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" id="submit_btn"
                            class="text-white w-full text-center bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded  px-3 py-2  dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-700">Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.getElementById('category_frm').addEventListener('submit',function(){
        var elm = document.getElementById('submit_btn');
        elm.innerText = 'Processing...';
        elm.setAttribute('disabled','disabled');
    });
</script>
@endpush
