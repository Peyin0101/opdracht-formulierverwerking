<x-layout>
    <!-- Main Content -->
    <!-- Posts Grid -->
    <section aria-labelledby="posts-list">
        <h2 id="posts-list" class="text-2xl font-semibold mb-6">Featured Posts</h2>

        <p class="mb-4">
            <x-link :href="route('posts.index')">Back to all posts</x-link>
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
