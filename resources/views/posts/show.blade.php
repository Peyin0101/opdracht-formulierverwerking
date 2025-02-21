<x-layout>
    <article class="bg-white shadow rounded-lg overflow-hidden">
        <header class="p-6">
            <img src="{{ $post->image_path ? asset($post->image_path) : 'https://via.placeholder.com/800x400' }}"
                alt="Post Image" class="w-full h-60 object-cover rounded-lg">
            <h1 class="text-4xl font-bold mb-4 mt-4">{{ $post->title }}</h1>
            <p class="text-gray-600 text-lg">Published on {{ $post->created_at->format('F j, Y') }}</p>
            <a href="{{ route('posts.edit', $post->id) }}"
                class="bg-orange-500 text-white px-4 py-2 rounded-md mt-4 inline-block">Edit</a>
            <a href="{{ route('posts.delete', $post->id) }}"
                class="bg-red-500 text-white px-4 py-2 rounded-md mt-4 inline-block">Delete</a>
        </header>

        <section aria-labelledby="introduction" class="p-6 bg-gray-50">
            <h2 id="introduction" class="text-2xl font-semibold mb-4">Introduction</h2>
            <p class="text-gray-700 leading-relaxed">
                {{ $post->introduction }}
            </p>
        </section>

        <section aria-labelledby="content" class="p-6">
            {{ $post->content }}
        </section>
    </article>

    <div class="mt-6 text-center">
        <x-link :href="route('posts.index')">Back to all posts</x-link>
    </div>
</x-layout>
