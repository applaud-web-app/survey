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


  {{-- end header --}}

  @yield('section')


  
 <div class="container mx-auto">
    <div class="w-full md:w-full lg:w-2/3 xl:w-2/3 mx-auto">
      <footer class="w-full flex items-center justify-between ">
        <span class="text-sm text-gray-600 sm:text-center dark:text-gray-400">© <script>
          document.write(new Date().getFullYear());
        </script> <a href="https://sdnonline.co.uk/" class="hover:underline text-blue-500"> The School Of Dental Nursing</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center text-sm font-medium text-gray-600 dark:text-gray-400 sm:mt-0">
            <li>
                <a href={{url('terms-conditions')}} class="hover:underline me-4">Terms of Use</a>
            </li>
            <li>
                <a href="{{url('privacy-policy')}}" class="hover:underline ">Privacy Policy</a>
            </li>
        </ul>
      </footer>
    </div>
  </div>
  





  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/js/pages/components.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>


  @stack('scripts')


</body>

</html>