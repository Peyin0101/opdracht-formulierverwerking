<x-layout>
    <section>
        <h2 id="create-post" class="text-2xl font-semibold mb-6">Create Post</h2>
        <x-post-form :action="route('posts.store')" method="POST" buttonText="Create" :cancelUrl="route('posts.index')" />
    </section>
</x-layout>
