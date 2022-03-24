<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Oops, Page not found</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<main class="h-full pb-16 overflow-y-auto bg-white">
          <div class="container flex flex-col items-center px-6 mx-auto">
            
            <img class="w-72" src="{{ asset('assets/img/404.gif') }}" alt="">
            <p class="text-gray-500 font-bold text-lg">We looked high and low, but…</p>
            <h1 class="text-6xl font-semibold text-gray-700 dark:text-gray-200">
              404
            </h1>
            <p class="text-gray-700 dark:text-gray-300">
              Page not found. Check the address or
              
              <a
                class="text-light-green-600 hover:underline dark:text-light-green-300"
                href="{{ route('home') }}"
              >
                go back
              </a>
              .
            </p>
            <img class="w-12 h-12 mt-4" src="{{ asset('assets/img/logo.png') }}" alt="">

          </div>
        </main>
      </div>
    </div>
  </body>
</html>

