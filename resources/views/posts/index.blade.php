<x-layout>
    <!-- Main Content -->
    <!-- Posts Grid -->
    <section aria-labelledby="posts-list">
        <h2 id="posts-list" class="text-2xl font-semibold mb-6">All Posts</h2>

        <p class="mb-4">
            <a href="{{ route('posts.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md inline-block">Add
                new post</a>
        </p>

        <p class="mb-4 flex gap-8 items-center">
            <x-link :href="route('home')">Back to home</x-link>
            <x-link :href="route('posts.featured')">Show featured posts</x-link>
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    </section>

    <!-- Pagination -->
    <nav aria-label="Pagination" class="mt-8">
        {{ $posts->links() }}
    </nav>
</x-layout>
