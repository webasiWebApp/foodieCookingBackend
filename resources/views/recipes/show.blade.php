<x-layout>
    <div class="flex-1 p-6 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
        <div class="max-w-4xl mx-auto">
            <a href="/" class="text-red-500 hover:text-red-600 mb-4 inline-block">&larr; Back to all recipes</a>

            <img src="{{ $recipe->image_url }}" alt="{{ $recipe->name }}" class="w-full h-96 object-cover rounded-lg shadow-lg mb-6">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2">
                    <h1 class="text-5xl font-extrabold mb-4">{{ $recipe->name }}</h1>
                    <p class="text-lg text-gray-600 mb-6">{{ $recipe->description }}</p>

                    <div class="mb-8">
                        <h2 class="text-3xl font-bold mb-4">Reviews</h2>
                        @if ($recipe->reviews->count() > 0)
                            <ul>
                                @foreach ($recipe->reviews as $review)
                                    <li class="mb-4 border-b border-gray-200 pb-4">
                                        <div class="flex items-center mb-2">
                                            <div class="text-yellow-400">
                                                @for ($i = 0; $i < $review->rating; $i++)
                                                    &#9733;
                                                @endfor
                                            </div>
                                            <p class="ml-2 text-lg font-semibold">{{ $review->name }}</p>
                                        </div>
                                        <p class="text-gray-600">{{ $review->review }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No reviews yet. Be the first to leave a review!</p>
                        @endif
                    </div>
                </div>

                <div>
                    <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg shadow-md">
                        <h2 class="text-2xl font-bold mb-4">Leave a Review</h2>
                        <form action="/recipes/{{ $recipe->id }}/reviews" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
                            </div>
                            <div class="mb-4">
                                <label for="rating" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Rating</label>
                                <select name="rating" id="rating" class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="review" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Review</label>
                                <textarea name="review" id="review" rows="4" class="mt-1 block w-full px-3 py-2 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required></textarea>
                            </div>
                            <button type="submit" class="w-full bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Submit Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
