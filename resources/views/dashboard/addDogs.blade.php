<x-dashboard>
    <x-slot:dashboardContent>

        <div class="p-2 p-md-4 p-lg-5 overflow-y-auto">
            <div class="my-4  flex justify-center ">
                <a href="{{route('dogs.index')}}" class="bg-blue-500 w-1/2 text-center hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4">Back</a>
            </div>
            <form action="{{route('dogs.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <legend class="text-center font-bold text-lg mb-4">Add a new dog</legend>

                <div class="mb-2 flex gap-4 w-100 justify-center">
                    <div>
                    <label for="dogname" class="block text-gray-800 text-sm">Dog Name</label>
                    <input type="text" name="dogname" value="{{old('dogname')}}" class="w-64 border border-gray-300 rounded-md py-1 px-2  focus:outline-none focus:border-blue-500" required >
                    @error('dogname')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    </div>
                    <div>
                    <label for="dogprice" class="block text-gray-800 text-sm">Dog Price</label>
                    <input type="number" name="dogprice" value="{{old('dogprice')}}" class="w-64 border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" required >
                    @error('dogprice')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="mb-2 flex justify-center">
                    <div class="w-1/2">
                    <label for="dogdescription" class="block text-gray-800 text-sm">Dog Description</label>
                    <textarea name="dogdescription" rows="3" class="w-full border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" required >{{old('dogdescription')}}</textarea>
                    @error('dogdescription')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="mb-1 flex gap-4 w-100 justify-center">
                    <div>
                    <label for="dogbreed" class="block text-gray-800 text-sm">Dog Breed</label>
                    <select name="dogbreed" value="{{old('dogname')}}" class="w-64 border border-gray-300 rounded-md py-1 px-2  focus:outline-none focus:border-blue-500">
                        <option value="pomeranian" selected>Pomeranian</option>
                        <option value="small" >Small breed</option>
                        <option value="big">Big breed</option>
                    </select>
                    </div>
                    <div>
                    <label for="dogimage" class="block text-gray-800 text-sm">Dog Image</label>
                    <input type="file" name="dogimage" class="w-64 border border-gray-300 text-sm rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" accept="image/+">
                    
                    </div>
                    
                </div>
                @error('dogimage')
                <div class="text-center">
                    <span class="text-red-600 mb-3">{{$message}}</span>
                </div>
                    @enderror
                <div class="my-4  flex justify-center ">
                    <button type="submit" class="bg-purple-500 w-1/2 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4">Add New</button>
                </div>
            </form>
        </div>
    </x-slot:dashboardContent>

    @push('scripts')
    <script>
        document.getElementById('dogs').classList.add('bg-gray-600');
    </script>
    @endpush
</x-dashboard>

