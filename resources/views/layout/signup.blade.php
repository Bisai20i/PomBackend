@extends('layout.template')


@section('content')
        <!-- component -->
<!-- component -->
<div class="flex justify-center overflow-hidden items-center max-w-full h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
    <img src="https://cdn.britannica.com/42/233842-050-E64243D7/Pomeranian-dog.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
<!-- Right: Login Form -->
    <div class= "lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
    <h1 class="text-2xl font-semibold mb-4">SignUp</h1>
    <form action="{{ route('user.create')}}" method="POST">
        @csrf
        <!-- Username Input -->
        <div class="mb-4 ">
        <label for="username" class="block text-gray-800">Name</label>
        <input type="text" name="username" value="{{old('username')}}" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required >
        @error('username')
        <span class="text-red-600">{{$message}}</span>
        @enderror
        
        </div>
        <div class="mb-4 ">
            <label for="username" class="block text-gray-800">Email</label>
            <input type="text" value="{{old('useremail')}}" name="useremail" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 " required autocomplete="off">
            @error('useremail')
            <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-4 ">
            <label for="username" class="block text-gray-800" value="{{old('usercontact')}}">Contact Number</label>
            <input type="text" name="usercontact" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500 " required autocomplete="off">
            @error('usercontact')
            <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <!-- Password Input -->
        <div class="mb-4">
        <label for="password" class="block text-gray-800">Password</label>
        <input type="password"  name="userpassword" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" required >
        @error('userpassword')
            <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4 w-full">Sign Up</button>
    </form>

    <div class="mt-6 text-purple-700 text-center">
        <a href="{{route('loginpage')}}" class="hover:underline">Back</a>
    </div>
    </div>
</div>
@endsection