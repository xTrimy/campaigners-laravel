@extends('layouts.portal')
@section('title')
    Add member
@endsection
@section('content')
    
        <main class="h-full pb-16 overflow-y-auto">
        <form method="POST">
        @csrf
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Add new member
            </h2>
            <!-- CTA -->
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Member Details
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            <div class="flex flex-wrap md:flex-nowrap w-full">
              <label class="block text-sm w-full md:w-6/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  required
                  name="name"
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
              <label class="block text-sm w-full md:w-6/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">Nickname</span>
                <input
                  required
                  name="nickname"
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="xTrimy"
                />
              </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap w-full">
              <label class="block text-sm w-full md:w-6/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">Phone</span>
                <input
                  required
                  name="phone"
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="0123456789"
                />
              </label>
              <label class="block text-sm w-full md:w-6/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">University ID</span>
                <input
                  required
                  name="university_id"
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="{{ date('Y') }}/12345"
                />
              </label>
            </div>
            
            <div class="flex flex-wrap md:flex-nowrap w-full">
              <label class="block text-sm w-full md:w-12/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                  required
                  name="email"
                  type="email"
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="example@campaigners.com"
                />
              </label>
            </div>
            <div class="flex flex-wrap md:flex-nowrap w-full">
              <label class="block text-sm w-full md:w-12/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">
                  Faculty
                </span>
                <select
                  name="faculty"
                  required
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:focus:shadow-outline-gray"
                >
                  <option value="" disabled selected>Please choose an option</option>
                  @foreach ($faculties as $faculty)
                  <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                  @endforeach
                </select>
              </label>
              <label class="block text-sm w-full md:w-12/12 p-2">
                <span class="text-gray-700 dark:text-gray-400">
                  Committee
                </span>
                <select
                  name="committee"
                  required
                  class="block py-2 px-4 border border-gray-200 rounded-lg w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:focus:shadow-outline-gray"
                >
                  <option value="" disabled selected>Please choose an option</option>
                  @foreach ($committees as $committee)
                  <option value="{{ $committee->id }}">{{ $committee->name }}</option>
                  @endforeach
                </select>
                
              </label>
            </div>
              
              <button
                  type="submit"
                  class="ml-2 mt-4 flex items-center justify-between px-4 py-2 text-base font-medium leading-5 text-white transition-colors duration-150 bg-light-green-600 border border-transparent rounded-lg active:bg-light-green-600 hover:bg-light-green-700 focus:outline-none focus:shadow-outline-light-green"
                >
                <span class="text-2xl mr-2">
                      <li class="las la-plus"></li>
                  </span>
                  <span>Add member</span>
                </button>
            </div>
          </div>
        </form>
        </main>
@endsection
      