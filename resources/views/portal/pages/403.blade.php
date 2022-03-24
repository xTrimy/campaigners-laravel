@extends('layouts.portal')
@section('title')
  Oops, Page not found
@endsection
@section('content')
  
        <main class="h-full pb-16 overflow-y-auto bg-white">
          <div class="container flex flex-col items-center px-6 mx-auto">
            <span class="mt-12 text-7xl">
              <i class="lar la-frown"></i> 
            </span>
            <p class="text-gray-500 font-bold text-lg">We tried everything, but…</p>
            <h1 class="text-6xl font-semibold text-gray-700 dark:text-gray-200">
              403
            </h1>
            <p class="text-gray-700 dark:text-gray-300 text-center">
              Access forbidden to this page. <br> If you think this is an error, contact a personnel member or 
              
              <a
                class="text-light-green-600 hover:underline dark:text-light-green-300"
                href="{{ route('leaf.home') }}"
              >
                go back
              </a>
              .
            </p>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
@endsection
