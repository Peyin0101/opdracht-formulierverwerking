<x-layout>
    @if ($featuredPost)
        <!-- Featured Post Section -->
        <section aria-labelledby="featured-post" class="mb-12">
            <h2 id="featured-post" class="text-2xl font-semibold mb-6">Featured Post</h2>
            <x-featured-post-card :post="$featuredPost" />
        </section>
    @endif

    <!-- Recent Posts Section -->
    <section aria-labelledby="recent-posts">
        <header class="flex items-baseline gap-4 mb-6">
            <h2 id="recent-posts" class="text-2xl font-semibold">Recent Posts</h2>
            <x-link :href="route('posts.index')">View all posts</x-link>
        </header>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recentPosts as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    </section>
</x-layout>
