@extends('layout.template')


@section('content')

@if(session('message') && session('status'))
    
    <div id="alertBox" class="absolute top-10 w-full flex justify-center">
        <div class="flex justify-between items-center w-1/2 py-2 px-6 rounded-full bg-{{session('status')==='Success'?'green':'red'}}-200">
            <p><strong>{{session('status')}}</strong> | {{session('message')}} </p>
            <strong onclick="document.getElementById('alertBox').classList.add('hidden')" class="px-4 py-1 font-bold cursor-pointer hover:text-red-700">X</strong>
        </div>
    </div>

@endif
<!-- component -->
<div class="flex justify-center overflow-hidden items-center max-w-full h-screen">
    <!-- Left: Image -->
    <div class="w-1/2 h-screen hidden lg:block">
    <img src="https://cdn.britannica.com/42/233842-050-E64243D7/Pomeranian-dog.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
<!-- Right: Login Form -->
    <div class= "lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
    <h1 class="text-2xl font-semibold mb-4">Check your Mail for Tokken</h1>
    <hr class="mb-4">
    <form action="{{route('resetpassword')}}" method="POST">
        @csrf

        <div class="mb-4 ">
        <label for="username" class="block text-gray-800">Enter 5 digit token:</label>
        <input type="number" name="token" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" >
        </div>
     
        <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4 w-full">Submit Token</button>
    </form>

    <div class="mt-6 text-purple-700 text-center">
        <a href="{{route('loginpage')}}" class="hover:underline">Login</a>
    </div>
    </div>
    
</div>
@endsection
