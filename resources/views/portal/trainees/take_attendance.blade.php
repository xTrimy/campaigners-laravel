@extends('layouts.portal')

@section('title')
  Trainees Attendance
@endsection
@section('content')
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Trainees Attendance
            </h2>
            @if($errors->any())
            <div class="text-red-500">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
            @if (Session::has('success'))
                <p class="text-light-green-800 bg-light-green-200 px-4 py-2 rounded-md">{{ Session::get('success') }}</p>
            @endif
            <form method="POST"
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
            @csrf
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                name="name"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>
               <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">University ID</span>
                    <input
                    name="university_id"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="20**/*****"
                    />
                </label>
               </div>
               <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">School</span>
                    <select
                    name="school_id"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    >
                        <option value="" disabled selected>Select School</option>
                        @foreach ($schools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                            
                        @endforeach
                    </select>
                </label>
               </div>
               <div class="mt-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Faculty</span>
                    <select
                    name="faculty_id"
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-light-green-400 focus:outline-none focus:shadow-outline-light-green dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    >
                        <option value="" disabled selected>Select Faculty</option>
                        @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                            
                        @endforeach
                    </select>
                </label>
               </div>
              <div class="mt-4">
                  <button type="submit" class="py-2 px-8 bg-light-green-500 hover:bg-light-green-600 rounded-md text-white"> Submit </button>
              </div>
            </form>


          </div>
        </main>

@endsection