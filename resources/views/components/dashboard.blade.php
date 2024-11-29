@extends('layout.template') 


@section('content')
@if(session('message') && session('status'))   
<div id="alertBox" class="absolute top-0 w-full flex justify-center z-10 p-4">
    <div class="flex justify-between items-center w-1/2 py-2 px-6 rounded-full bg-{{session('status')==='Success'?'green':'red'}}-200">
        <p><strong>{{session('status')}}</strong> | {{session('message')}}</p>
        <strong onclick="document.getElementById('alertBox').classList.add('hidden')" class="px-4 py-1 font-bold cursor-pointer hover:text-red-700">X</strong>
    </div>
</div>
@endif
<div class="flex lg:max-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 pt-6 text-white h-screen hidden lg:block">
      <x-navlinks/>
    </aside>

    <!-- Main Content -->
    <div class="mt-10 pt-6 flex-1 flex flex-col">
        <hr>
      <!-- Content Area -->
      <main class="flex-1 p-4 overflow-y-auto">
        
        {!!$dashboardContent??"<h1 class='font-bold text-2xl mt-3 text-center'>Welcome to dashboard</h1>"!!}
        
      </main>
    </div>
</div>

    
@endsection

