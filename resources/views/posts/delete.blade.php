<x-layout>
    <section>
        <h2 id="delete-post" class="text-2xl font-semibold mb-6">Delete Post</h2>
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @method('DELETE')
            @csrf

            <h3>Are you sure want to delete this post?</h3>
            <div class="flex gap-4 items-baseline mt-8">
                <input class="bg-red-500 cursor-pointer text-white px-4 py-2 rounded-md mt-4 inline-block" type="submit"
                    value="Yes, delete it!">
                <a class="hover:underline" href="{{ route('posts.show', $post) }}">No, cancel...</a>
            </div>
        </form>
    </section>
</x-layout>
