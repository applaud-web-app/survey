@extends('layout.master')
@section('section')
    <section class="relative content-body">
        <div>
            @include('messages')
        </div>
        <div class="container mx-auto ">
            <div class="flex items-center justify-between flex-wrap mb-5">
                <div class="items-center ">
                    <h1 class="md:text-3xl text-2xl md:mb-0 mb-3 block dark:text-slate-100">Category</h1>
                </div>


                <a href="{{ url('admin/add-category') }}"
                    class="px-2 py-2 lg:px-4 md:text-base text-sm border border-blue-500 bg-blue-500 text-white rounded hover:bg-blue-600"><i
                        class="fa-solid fa-plus"></i> Add New</a>

            </div>



            <div class="">
                <!-- component -->
                <div class="relative overflow-x-auto  sm:rounded">
                    <table class="w-full  text-left border text-gray-500 dark:text-gray-400">
                        <thead class="justify-between">
                            <tr class="bg-gray-800 dark:bg-slate-700">
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    #
                                </th>
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    Title
                                </th>
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    Description
                                </th>
                                <th scope="col" class="px-5 py-3 text-slate-200">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-gray-200">

                            @php
                                $i=0;
                            @endphp
                            @foreach($categories as $val)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-slate-700 hover:bg-gray-50 dark:hover:bg-slate-900/20">
                                    <td class="px-5 py-3">
                                        <span>{{ $i+1 }}</span>
                                    </td>
                                    <td class="px-5 py-3">
                                        <span>{{$val->category_name}}</span>
                                    </td>

                                    <td class="px-5 py-3">
                                        <span>{{$val->category_description!=null ? $val->category_description : '-'}}</span>
                                    </td>


                                    <td class="px-5 py-3">
                                        <div class="flex items-center space-x-3">
                                            @php
                                                $inputObj = new stdClass();
                                                $inputObj->params = 'id='.$val->id;
                                                $inputObj->url = url('admin/edit-category');
                                                $encLink = Common::encryptLink($inputObj);

                                                $inputObjD = new stdClass();
                                                $inputObjD->params = 'id='.$val->id;
                                                $inputObjD->url = url('admin/remove-category');
                                                $deleteLink = Common::encryptLink($inputObjD);
                                            @endphp
                                            <a href="{{$encLink}}"
                                                class="whitespace-nowrap font-medium text-blue-600 dark:text-blue-500 hover:underline"><i
                                                    class="fa-regular fa-pen-to-square"></i> Edit</a>
                                            <a href="javascript:void(0)" data-id="{{$deleteLink}}"
                                                class="whitespace-nowrap font-medium text-red-600 dark:text-red-500 hover:underline remove_link"><i
                                                    class="fa-solid fa-trash-can"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>

                <div class="mt-5">
                    {{$categories->links()}}
                </div>

               

            </div>

        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.remove_link').forEach(function(elem){
            elem.addEventListener('click',function(e){
                var link = e.target.getAttribute('data-id');
                if(confirm('Are you sure? you want to remove this category')){
                    window.location.href = link;
                }
            });
        })
    </script>
@endpush
