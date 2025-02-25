<form novalidate method="POST" action="{{ $action }}" enctype="multipart/form-data">
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif
    <div class="mb-4">
        <label for="title" class="block text-gray-700">Title</label>
        <input type="text" name="title" id="title" class="w-full border-gray-300 rounded-md" value="{{ old('title') }}"
            required>
            @error('title')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <div class="flex items-center gap-2">
            <input type="checkbox" value="1" name="featured" id="featured" class="border-gray-300 rounded-md" {{ old('featured') ? 'checked' : '' }}>
            <label for="featured" class="block text-gray-700">Featured</label>
        </div>
        @error('featured')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="introduction" class="block text-gray-700">Introduction</label>
        <textarea name="introduction" id="introduction" class="w-full border-gray-300 rounded-md" required>{{ old('introduction') }}</textarea>
        @error('introduction')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="content" class="block text-gray-700">Content</label>
        <textarea name="content" id="content" class="w-full border-gray-300 rounded-md" required>{{ old('content') }}</textarea>
        @error('content')
        <p class="text-red-500 text-xs mt-1">{{ $message}}</p>
        @enderror
    </div>
    <div class="mb-4">
        <label for="image" class="block text-gray-700">Image</label>
        <input type="file" name="image" id="image" class="w-full border-gray-300 rounded-md">
        @error('image')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="text-center">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">{{ $buttonText }}</button>
        @if (isset($cancelUrl))
            <a href="{{ $cancelUrl }}" class="bg-gray-500 text-white px-4 py-2 rounded-md ml-2">Cancel</a>
        @endif
    </div>
</form>
