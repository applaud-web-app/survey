<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Feedback App</title>
  <meta content="The School of Dental Nursing" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico') }}" />

  @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  @stack('styles')
</head>

<body data-layout-mode="light"
  class="bg-gray-50 dark:bg-gray-900 ">

  {{-- start header --}}
  <header class="sticky top-0 z-40 header_area">

    <nav class="border-gray-200 bg-[#091734] px-2.5 py-2.5 shadow-sm dark:bg-slate-800 sm:px-4 block print:hidden">
      <div class="container mx-0 flex flex-wrap items-center lg:mx-auto">
        <div class="flex items-center">
          <a href="{{url('/')}}" class="flex items-center outline-none">

            <img src="{{asset('assets/images/logo.png')}}" alt="" class="ml-2 block h-12 md:h-20  w-auto" />
          </a>
        </div>

        <div class="order-2 hidden w-full items-center justify-between md:order-1 md:ml-5 md:flex md:w-auto" id="mobile-menu-2">
          @if(Auth::check())
          <ul class="font-body mt-4 flex flex-col font-medium md:mt-0 md:flex-row md:text-sm md:font-medium space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 navbar">
              

            <li>
              <a href="{{url('/')}}"
                class="text-slate-300 flex w-full items-center border-b border-gray-800 py-1 px-2 font-medium md:border-0 md:p-0">
                <i class="ti ti-smart-home mr-1 pb-1 text-lg"></i> Home
              </a>
            </li>
            @if(Auth::user()->u_type==1)
              <li class="dropdown">
                <button id="categoryLink" data-dropdown-toggle="navcategory" class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-1 px-2 font-medium md:border-0 md:p-0">
                    <i class="ti ti-apps mr-1 pb-1 text-lg"></i> Category
                    <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                </button>
                  <!-- Dropdown menu -->
                  <div id="navcategory" class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu">
                      <ul class="py-1">
                          <li>
                              <a href="{{url('admin/add-category')}}" class="nav-link  dark:hover:bg-slate-800/70">Add New</a>
                          </li>
                          <li>
                              <a href="{{url('admin/all-categories')}}" class="nav-link  dark:hover:bg-slate-800/70">All Categories</a>
                          </li>
                        
                      </ul>
                  </div>
              </li>
            @endif


            <li class="dropdown">
              <button id="formsLinks" data-dropdown-toggle="navForms" class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-1 px-2 font-medium md:border-0 md:p-0">
                  <i class="ti ti-apps mr-1 pb-1 text-lg"></i>Survey Forms
                  <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
              </button>
              <!-- Dropdown menu -->
                  <div id="navForms" class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu">
                      <ul class="py-1">
                          <li>
                              <a href="{{url('admin/add-survey-form')}}" class="nav-link  dark:hover:bg-slate-800/70">Add New</a>
                          </li>
                          <li>
                              <a href="{{url('admin/feedback-forms')}}" class="nav-link  dark:hover:bg-slate-800/70">All Forms</a>
                          </li>
                          {{-- <li>
                              <a href="{{url('feedback-form')}}" class="nav-link  dark:hover:bg-slate-800/70">Feedback</a>
                          </li> --}}
                        
                      </ul>
                  </div>
            </li>

            @if(Auth::user()->u_type==1)
              <li class="dropdown">
                <button id="userLinks" data-dropdown-toggle="navUser" class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-1 px-2 font-medium md:border-0 md:p-0">
                    <i class="ti ti-apps mr-1 pb-1 text-lg"></i> Users
                    <i class="ti ti-chevron-down ml-auto lg:ml-1"></i>
                </button>
                  <!-- Dropdown menu -->
                    <div id="navUser" class="dropdown-menu z-10 my-1 hidden w-full list-none divide-y divide-gray-100 rounded bg-gray-800 md:bg-white text-base shadow dark:divide-gray-600 border border-slate-700 md:border-white dark:border-slate-700/50 dark:bg-gray-900 md:w-44 dropdown-menu">
                        <ul class="py-1">
                            <li>
                                <a href="{{url('admin/add-user')}}" class="nav-link  dark:hover:bg-slate-800/70">Add New</a>
                            </li>
                            <li>
                                <a href="{{url('admin/all-users')}}" class="nav-link  dark:hover:bg-slate-800/70">All Users</a>
                            </li>
                          
                        </ul>
                    </div>
              </li>
            @endif
  
                 
              
             
          </ul>
          @endif
      </div>
      <div class="order-1 ml-auto flex items-center md:order-2">
        
          @if(!Auth::check())
            <div class="relative mr-2 hidden lg:mr-4 lg:block">
              <a href="{{url('/')}}" class="px-3 py-2  text-sm font-medium text-gray-900 focus:outline-none bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-blue-500 focus:z-10 focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-right-to-bracket pr-1"></i>Login</a>
            </div>
          @endif
          @if(Auth::check())
            <div class="mr-2 lg:mr-0 dropdown relative">
              <button type="button"
                class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
                id="user-profile" aria-expanded="false" data-dropdown-toggle="navUserdata">
                <img class="h-8 w-8 rounded-full" src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user photo" />
                <span class="ml-2 hidden text-left xl:block">
                  <span class="block font-medium text-gray-50">{{auth()->user()->name}}<i class="fas fa-chevron-down text-xs"></i></span>
                  {{-- <span class=" block text-sm font-medium text-gray-200">{{auth()->user()->email}}</span> --}}
                </span>
              </button>

              <div
                class="dropdown-menu z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 hidden"
                id="navUserdata">
                <div class="py-3 px-4">
                  <span class="block text-sm font-medium text-gray-900 dark:text-white">{{auth()->user()->name}}</span>
                  <span class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400">{{auth()->user()->email}}</span>
                </div>
                <ul class="py-1" aria-labelledby="navUserdata">
                 
                  <li>
                    <a href="{{url('admin/profile')}}"
                      class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">Profile</a>
                  </li>
            
          
                  <li>
                    <a href="{{url('/logout')}}"
                      class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">Sign
                      out</a>
                  </li>
                </ul>
              </div>
            </div>
          @endif

          <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu" class="ml-1 inline-flex items-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden" aria-controls="mobile-menu-2" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <i class="ti ti-menu-2 h-6 w-6 text-lg leading-6"></i>
              <i class="ti ti-X hidden h-6 w-6 text-lg leading-6"></i>
          </button>
      </div>
      {{-- end --}}

        
      </div>
    </nav>

  </header>

  {{-- end header --}}

  @yield('section')


  

<footer class="bg-[#1282bf] w-full footer_area">
  <div class="container mx-auto p-3">
    <div class="sm:flex sm:items-center sm:justify-between ">
      <div class="flex my-1 justify-center sm:mt-0 space-x-3">
        <a href="#" class="h-8 w-8 text-center leading-8 bg-white text-blue-500 hover:text-blue-600 border rounded-full border-gray-100 dark:hover:text-white ">
          <i class="fa-brands fa-facebook-f"></i>
           
        </a>
        <a href="#" class="h-8 w-8 text-center leading-8 bg-white text-blue-500 hover:text-blue-600 border rounded-full border-gray-100 dark:hover:text-white ">
          <i class="fa-brands fa-instagram"></i>
          
        </a>
        <a href="#" class="h-8 w-8 text-center leading-8 bg-white text-blue-500 hover:text-blue-600 border rounded-full border-gray-100 dark:hover:text-white ">
          <i class="fa-brands fa-twitter"></i>
           
        </a>
        <a href="#" class="h-8 w-8 text-center leading-8 bg-white text-blue-500 hover:text-blue-600 border rounded-full border-gray-100 dark:hover:text-white ">
          <i class="fa-brands fa-linkedin-in "></i>
           
        </a>
      
    </div>
      <ul class="flex flex-wrap items-center justify-center  text-sm font-medium text-gray-100 sm:mb-0 my-1 ">
          <li>
              <a href="{{url('terms-conditions')}}" class="hover:underline me-3 md:me-6">Terms Of Use</a>
          </li>
          <li>
              <a href="{{url('privacy-policy')}}" class="hover:underline ">Privacy Notice</a>
          </li>
       
          
      </ul>
    </div>
    <hr class="my-2 border-gray-200 sm:mx-auto  lg:my-5" />
     <span class="block text-sm text-white text-center ">©
        <script>
          document.write(new Date().getFullYear());
        </script>
        The School Of Dental Nursing &nbsp;|&nbsp;  Developed By
        <a href="https://applaudwebmedia.com/" class="hover:underline">Applaud Web Media Pvt. Ltd.</a>
      </span>
  </div>
  
</footer>




  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/js/pages/components.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>


  @stack('scripts')

  <script>
 
    
        var h_height = document.querySelector('.header_area').offsetHeight;
        var f_height = document.querySelector('.footer_area').offsetHeight;
        document.querySelector('.content-body').style.minHeight = window.innerHeight - (h_height + f_height) + 'px';
    
   
  </script>

</body>

</html>