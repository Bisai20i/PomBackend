
<x-dashboard>
    <x-slot:dashboardContent>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- Card 1 -->
          <div class="bg-purple-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg">{{$dog['count']}}</h2>
            <p class="text-gray-600">Dogs in total.</p>
          </div>
          <!-- Card 2 -->
          <div class="bg-cyan-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg">NPR.{{$dog['totalearn']}}</h2>
            <p class="text-gray-600">Earned in total.</p>
          </div>
          <!-- Card 3 -->
          <div class="bg-blue-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg">{{$dog['currentdogs']}}</h2>
            <p class="text-gray-600">Dogs for Sell.</p>
          </div>
          <div class="bg-green-200 shadow-md rounded-lg p-6">
            <h2 class="font-bold text-lg">{{$dog['sold']}}</h2>
            <p class="text-gray-600">Dogs sold.</p>
          </div>
          <!-- Add more cards as needed -->
        </div>
    </x-slot:dashboardContent>
    @push('scripts')
    <script>
        document.getElementById('dashboard').classList.add('bg-gray-600');
    </script>
    @endpush
</x-dashboard>

