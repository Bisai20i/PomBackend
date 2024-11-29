
<x-dashboard>
    <x-slot:dashboardContent>

        <div class="p-2 p-md-4 p-lg-5 overflow-y-auto">
            <a href="{{route('dogs.create')}}" class="my-5 rounded-lg bg-blue-500 py-1.5 px-4 font-sans text-sm text-white shadow-sm shadow-blue-500/20 transition-all hover:shadow-md hover:shadow-blue-500/40"> Add New Dog </a>

            <table class="min-w-full mt-4 bg-white border border-gray-200">
                <thead class="bg-gray-200">
                  <tr>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Image</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Description</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Price</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Breed</th>
                    <th class="py-2 px-4 border-b border-gray-300 text-left text-gray-600 font-semibold">Actions</th>
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
                            <div class="flex items-center gap-2 justify-center">
                            <a href="{{route('dogs.edit',$dog->id)}}" class="bg-blue-400 hover:bg-blue-500 px-1.5  rounded-lg  text-white">Edit</a>
                            <form action="{{route('dogs.destroy',$dog->id)}}" method="POST"> 
                                @csrf
                                @method("DELETE")
                            <button type="submit"class="bg-red-400 hover:bg-red-500 px-1.5  rounded-lg  text-white">Delete</button></form>
                        </div>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </x-slot:dashboardContent>
    @push('scripts')
    <script>
        document.getElementById('dogs').classList.add('bg-gray-600');
    </script>
    @endpush
</x-dashboard>