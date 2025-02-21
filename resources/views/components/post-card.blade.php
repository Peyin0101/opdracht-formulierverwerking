<x-card as="article">
    <img src="{{ $post->image_path ? asset($post->image_path) : 'https://via.placeholder.com/400x200' }}" alt="Post Image"
        class="w-full h-40 object-cover">
    <div class="p-6">
        <h3 class="text-lg font-bold mb-2">
            {{ $post->title }}
        </h3>
        <p class="text-gray-700 mb-4">
            {{ $post->introduction }}
        </p>
        <x-link :href="route('posts.show', $post)">Read more</x-link>
    </div>
</x-card>
