@extends('layouts.portal')
@section('title')
  Oops, Page not found
@endsection
@section('content')
  
  <main class="h-full pb-16 overflow-y-auto bg-white">
		<!-- defualt theme -->
    <div class="flex">
		<div class="w-full z-10 flex-1 p-2">
		<div class="flex flex-col">
			<div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
				<div class="flex-none sm:flex">
					<div class=" relative h-32 w-32   sm:mb-0 mb-3">
						<img src="https://tailwindcomponents.com/storage/avatars/njkIbPhyZCftc4g9XbMWwVsa7aGVPajYLRXhEeoo.jpg" alt="aji" class=" w-32 h-32 object-cover rounded-2xl">
						<a href="#"
							class="absolute -right-2 bottom-2   -ml-3  text-white p-1 text-xs bg-light-green-400 hover:bg-light-green-500 font-medium tracking-wider rounded-full transition ease-in duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
								class="h-4 w-4">
								<path
									d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
								</path>
							</svg>
						</a>
					</div>
					<div class="flex-auto sm:ml-5 justify-evenly">
						<div class="flex items-center justify-between sm:mt-2">
							<div class="flex items-center">
								<div class="flex flex-col">
									<div class="w-full flex-none text-lg text-gray-800 font-bold leading-none">xTrimy</div>
									<div class="flex-auto text-gray-500 my-1">
										<span class="mr-3  px-6 rounded-full bg-green-100 text-green-500">Personnel</span>
                    <span class="mr-3 border-r border-gray-200  max-h-0"></span>
                    <span class="px-6 rounded-full bg-purple-100 text-purple-500">Head</span>
									</div>
								</div>
							</div>
						</div>
							
							<div class="flex pt-2  text-sm text-gray-500">
								<div class="flex-1 inline-flex items-center">
									<span class="text-2xl mr-2">
                    <li class="las la-bullseye text-red-500"></li>
                  </span>
									<p class="">1.2k Points</p>
								</div>
								<div class="flex-1 inline-flex items-center">
									<span class="text-2xl mr-2 text-yellow-500">
                    <li class="las la-fire-alt"></li>
                  </span>
									<p class="">14 Streak</p>
								</div>
								<button  class="flex-no-shrink flex items-center bg-light-green-400 hover:bg-light-green-500 px-5 ml-4 py-2 text-md shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-light-green-300 hover:border-light-green-500 text-white rounded-full transition ease-in duration-300">
                  <span class="text-xl mr-2">
                    <li class="las la-user-plus"></li>
                  </span>
                  <span>
                  Add Friend
                  </span>
                </button>
							</div>
						</div>
					</div>
				</div>
        
			</div>
      <div class="flex flex-col">
			<div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
          <h1 class="text-2xl font-bold">Actions</h1>
				<div class="flex-none sm:flex">
					<div class="flex-auto justify-evenly">
							<div class="flex pt-2  text-sm text-gray-500">
								<button  class="flex-no-shrink flex items-center mr-4 bg-red-400 hover:bg-red-500 px-5 py-2 text-md shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-300 hover:border-red-500 text-white rounded-full transition ease-in duration-300">
                  <span class="text-xl mr-2">
                    <li class="las la-ban"></li>
                  </span>
                  <span>
                  Warn
                  </span>
                </button>
                <button  class="flex-no-shrink flex items-center mr-4 bg-blue-400 hover:bg-blue-500 px-5 py-2 text-md shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-blue-300 hover:border-blue-500 text-white rounded-full transition ease-in duration-300">
                  <span class="text-xl mr-2">
                    <li class="las la-envelope"></li>
                  </span>
                  <span>
                  Message
                  </span>
                </button>
                <button  class="flex-no-shrink flex items-center mr-4 bg-yellow-400 hover:bg-yellow-500 px-5 py-2 text-md shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-yellow-300 hover:border-yellow-500 text-white rounded-full transition ease-in duration-300">
                  <span class="text-xl mr-2">
                    <li class="las la-pen"></li>
                  </span>
                  <span>
                  Edit
                  </span>
                </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    <div class="flex-1 p-2">
			<div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
        <h1 class="font-bold text-xl">About</h1>
        <div class="text-gray-600 mt-4">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem modi, adipisci officia dolores similique sed, iure cupiditate dolore veniam sunt dolor rerum aspernatur alias atque qui laudantium facilis, illo quis.
        </div>
        <hr class="mt-4">
        <table class="mt-4">
          <tr>
            <td class="font-bold">Phone:</td>
            <td>01156052920</td>
          </tr>
          <tr>
            <td class="font-bold">Email:</td>
            <td>example@example.com</td>
          </tr>
          <tr>
            <td class="font-bold">Faculty:</td>
            <td>Computer Science</td>
          </tr>
         <tr>
            <td class="font-bold">Birth date:</td>
            <td>1999/08/08</td>
          </tr>
        </table>
      </div>
    </div>
	</div>
</main>
     
@endsection
