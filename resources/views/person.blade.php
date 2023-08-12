<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Person List</title>
</head>
<body>

<div class="h-screen flex flex-col items-center justify-center">
    <p class="text-grey-900 text-2xl mb-3">Add a New Person</p>

<form class="space-y-6" action="/store" method="POST">
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 ">

    {{-- <div class="space-y-12"> --}}
        <div class="border-b border-gray-900/10 pb-12 ">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
    @csrf


    {{-- <input type="text" name="name" placeholder="Name"><br> --}}
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="name" id="name" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>

    {{-- <input type="email" name="email" placeholder="Email"><br> --}}
    <div class="sm:col-span-4">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

    {{-- <input type="text" name="address" placeholder="Address"><br> --}}
    <div class="col-span-full">
        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
        <div class="mt-2">
          <input type="text" name="address" id="address" autocomplete="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
    {{-- <input type="text" name="location" placeholder="Location"><br> --}}
    <div class="col-span-full">
        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Location</label>
        <div class="mt-2">
          <input type="text" name="location" id="location" autocomplete="location" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
    {{-- <textarea name="about" placeholder="About"></textarea><br> --}}
    <div class="col-span-full">
        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
        <div class="mt-2">
          <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
      </div>
    </div>
    </div>
    <button class="bg-gray-900 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-full">
        Submit
      </button>
</div>
</div>
</form>

<h1 class="text-grey-900 text-2xl mb-3">People List</h1>

@if(count($people) > 0)
    <ul>

        @foreach ($people as $person)
        
            <li>
                <a href="#" class="flex flex-col items-center m-8 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <strong>Name:</strong> {{ $person->name }}<br>
                <strong>Email:</strong> {{ $person->email }}<br>
                <strong>Address:</strong> {{ $person->address }}<br>
                <strong>Location:</strong> {{ $person->location }}<br>
                <strong>About:</strong> {{ $person->about }}<br>
                    </div>
                </a>
                
            </li>
        @endforeach
    </ul>
@else
    <p>No people found.</p>
@endif

</body>
</html>
