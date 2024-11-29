<x-dashboard>
  @if ($orderCount)
  @push('css')
  <style>
    #sellBtn::after{
      content: '';
      position:absolute;
      height: 15px;
      text-align: center;
      width: 15px;
      top: -5px;
      left:-5px;
      border-radius: 50%;
      background: red;
      color: white;

    }
  </style>
@endpush
  @endif

    <x-slot name="dashboardContent">
        <div class="p-2 p-md-4 p-lg-5 overflow-y-auto">
          <div class="flex justify-between mb-3">
            <h2 class="font-bold text-2xl text-purple-800">ALL DOGS</h2>
            <a href="{{route('selldog')}}" id="sellBtn" class="relative py-1 px-3 rounded-lg border-2 text-sm  hover:border-purple-600 border-purple-300 text-purple-600">Sell Dogs </a>
          </div>
            
            <table class="min-w-full my-2 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Image</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Description</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Price</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Breed</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">By User</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($dogs as $dog)
                    <tr class="hover:bg-gray-100">
                        <td class="border-b border-gray-200"><img class="h-20 w-full" src="{{asset('/uploads'.'/'.$dog->image_path)}}" alt="dogimage"></td>
                        <td class="py-2 px-4 border-b border-gray-200"> {{$dog->name}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$dog->description}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">NPR {{$dog->price}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$dog->breed}}</td>
                        <td class="py-2 px-2 border-b border-gray-200">
                            {{$dog->user->name}}
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
              <hr>
            <h2 class="font-bold text-2xl text-purple-800 my-3">ALL Users</h2>
            <table class="min-w-full mt-2 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">UserId</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Email</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Contact</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Mail</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b border-gray-200"> {{$user->id}}</td>
                        <td class="py-2 px-4 border-b border-gray-200"> {{$user->name}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{$user->email}}</td>
                        <td class="py-2 px-4 border-b border-gray-200">+977 {{$user->contact}}</td>
                        <td class="py-2 px-2 border-b border-gray-200">
                            <div class="flex items-center gap-2 justify-center">
                            <a href="" class="bg-blue-400 hover:bg-blue-500 px-1.5  rounded-lg  text-white">Mail</a>
        
                        </div>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </x-slot>
    @push('scripts')
    <script>
        document.getElementById('dashboard').classList.add('bg-gray-600');
    </script>
    @endpush
</x-dashboard>