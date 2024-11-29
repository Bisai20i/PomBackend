<x-dashboard>
  
      <x-slot name="dashboardContent">
        <div class="p-2 p-md-4 p-lg-5 overflow-y-auto">
            <div class="flex justify-between mb-3">
              <h2 class="font-bold text-2xl text-purple-800">Dogs Requested for Buying:</h2>
              <a href="{{route('dashboard.admin')}}" id="sellBtn" class="relative py-1 px-3 rounded-lg border-2 text-sm  hover:border-purple-600 border-purple-300 text-purple-600">Back</a>
            </div>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @if ($count===0)
                <span class="text-red-500">No any dogs Ordered at the moment.</span>
            @else
                @foreach ($orders as $order)
                @if(!$order->sold)
                    <div class="bg-blue-100 shadow-md rounded-lg p-3">
                        <div class="flex justify-center w-full">
                            <img src="{{asset('/uploads'.'/'.$order->dog->image_path)}}" class="w-auto h-36">
                        </div>
                    
                        <h2 class="text-gray-700 text-lg font-bold mt-2">NPR.{{$order->dog->price}}</h2>
                        <p class="text-gray-600">{{$order->dog->name}}.</p>
                        <hr class="border-blue-800 my-2">
                        <p class="text-blue-600 font-bold">Buyer Information:</p>
                        <p class="text-gray-600">Name: {{$order->buyer_name}}.</p>
                        <p class="text-gray-600">Contact: {{$order->buyer_contact}}.</p>
                        <p class="text-gray-600">Email: {{$order->buyer_email}}.</p>
                        <p class="text-gray-600">Address: {{$order->buyer_address}}.</p>
                        <div class="w-full flex pt-2 ">
                            <a href="{{route('dogsold',$order->id)}}" class="text-sm px-2 py-1 border-2 border-blue-300 rounded-lg text-blue-700 hover:border-blue-500">Sold</a>
                        </div>
                  </div>
                @endif
                @endforeach
            @endif
            </div>
            <h2 class="font-bold text-2xl text-purple-800 my-3">All Orders:</h2>
            <table class="min-w-full mt-2 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">OrderId</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">BuyerName</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">BuyerContact</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">DogId</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Order Date</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Selling Date</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b border-gray-200"> {{$order->id}}</td>
                        <td class="py-2 px-4 border-b border-gray-200"> {{$order->buyer_name}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$order->buyer_contact}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$order->dog->id}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$order->created_at}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$order->updated_at}}</td>
                      </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
      </x-slot>
  </x-dashboard>