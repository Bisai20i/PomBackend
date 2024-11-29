<x-dashboard>
    
    <x-slot:dashboardContent>

        <div class="h-100 p-2 p-md-4 p-lg-5 overflow-y-scrool">
            <div class="my-4  flex justify-center ">
                <a href="{{route('dogs.index')}}" class="bg-blue-500 w-1/2 text-center hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4">Back</a>
            </div>
            <form action="{{route('dogs.update',$dog->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <legend class="text-center font-bold text-lg mb-4">Edit Dog</legend>

                <div class="mb-2 flex gap-4 w-100 justify-center">
                    <div>
                    <label for="dogname" class="block text-gray-800 text-sm">Dog Name</label>
                    <input type="text" name="dogname" value="{{$dog->name}}" class="w-64 border border-gray-300 rounded-md py-1 px-2  focus:outline-none focus:border-blue-500" required >
                    @error('dogname')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    </div>
                    <div>
                    <label for="dogprice" class="block text-gray-800 text-sm">Dog Price</label>
                    <input type="number" name="dogprice" value="{{$dog->price}}" class="w-64 border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" required >
                    @error('dogprice')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="mb-2 flex justify-center">
                    <div class="w-1/2">
                    <label for="dogdescription" class="block text-gray-800 text-sm">Dog Description</label>
                    <textarea name="dogdescription" rows="3" class="w-full border border-gray-300 rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" required >{{$dog->description}}</textarea>
                    @error('dogdescription')
                    <span class="text-red-600">{{$message}}</span>
                    @enderror
                    </div>
                </div>
                <div class="mb-1 flex gap-4 w-100 justify-center">
                    <div>
                    <label for="dogbreed" class="block text-gray-800 text-sm">Dog Breed</label>
                    <select name="dogbreed" value="{{old('dogname')}}" class="w-64 border border-gray-300 rounded-md py-1 px-2  focus:outline-none focus:border-blue-500">
                        <option value="pomeranian" {{$dog->breed==='pomeranian'?'selected':''}}>Pomeranian</option>
                        <option value="small" {{$dog->breed==='small'?'selected':''}}>Small breed</option>
                        <option value="big" {{$dog->breed==='big'?'selected':''}}>Big breed</option>
                    </select>
                    </div>
                    <div>
                    <label for="dogimage" class="block text-gray-800 text-sm">Dog Image</label>
                    <input type="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])" name="dogimage" class="w-64 border border-gray-300 text-sm rounded-md py-1 px-2 focus:outline-none focus:border-blue-500" accept="image/+">
                    </div>
                </div>
                @error('dogimage')
                <div class="text-center">
                    <span class="text-red-600 mb-3">{{$message}}</span>
                </div>
                @enderror
                <div class="mb-2 flex justify-center">
                    <div class="w-1/2 ">
                    <img id="previewImg" src="{{asset('/uploads'.'/'.$dog->image_path)}}" class="max-w-full h-auto" alt="Dog Preview">
                    </div>
                </div>
                <div class="my-4  flex justify-center ">
                    <button type="submit" class="bg-purple-500 w-1/2 hover:bg-purple-600 text-white font-semibold rounded-md py-2 px-4">Update New</button>
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