<x-layout>
    <div class="flex-1 p-6 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
        <div class="mb-6">
            <h1 class="text-4xl font-bold mb-2">Recipes</h1>
            <p class="text-lg text-gray-600">Browse our collection of delicious recipes.</p>
        </div>

        <div class="mb-6">
            <input type="text" placeholder="Search for a recipe..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recipes as $recipe)
                <a href="/recipes/{{ $recipe->id }}" class="block rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">{{ $recipe->name }}</h3>
                        <p class="text-gray-600">{{ $recipe->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
