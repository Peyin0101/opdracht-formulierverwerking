<x-layout>
    <section>
        <h2 id="edit-post" class="text-2xl font-semibold mb-6">Edit Post</h2>
        <x-post-form :action="route('posts.update', $post->id)" method="PUT" :post="$post" buttonText="Update" :cancelUrl="route('posts.show', $post->id)" />
    </section>
</x-layout>
