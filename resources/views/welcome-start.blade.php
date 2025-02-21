<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-center">My Awesome Blog</h1>
            <p class="text-center text-gray-600 mt-2">Sharing insights, tutorials, and stories.</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Featured Post Section -->
        <section aria-labelledby="featured-post" class="mb-12">
            <h2 id="featured-post" class="text-2xl font-semibold mb-6">Featured Post</h2>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img src="https://via.placeholder.com/800x400" alt="Featured Post Image"
                    class="w-full h-60 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">How to Build a Responsive Website with Tailwind CSS</h3>
                    <p class="text-gray-700 mb-4">Learn the basics of responsive design with Tailwind CSS in this
                        step-by-step guide.</p>
                    <a href="#" class="text-blue-600 font-medium hover:underline">Read more →</a>
                </div>
            </div>
        </section>

        <!-- Recent Posts Section -->
        <section aria-labelledby="recent-posts">
            <header class="flex items-baseline gap-4 mb-6">
                <h2 id="recent-posts" class="text-2xl font-semibold">Recent Posts</h2>
                <a href="#" class="text-blue-600 font-medium hover:underline">View all posts →</a>
            </header>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Single Post -->
                <article class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">Understanding HTML Semantics</h3>
                        <p class="text-gray-700 mb-4">Dive into the importance of semantic HTML for better accessibility
                            and SEO.</p>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Read more →</a>
                    </div>
                </article>
                <!-- Repeat Posts -->
                <article class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">CSS Grid vs. Flexbox</h3>
                        <p class="text-gray-700 mb-4">Understand the differences and best use cases for CSS Grid and
                            Flexbox.</p>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Read more →</a>
                    </div>
                </article>
                <article class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Post Image" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">Improving Web Performance</h3>
                        <p class="text-gray-700 mb-4">Tips and tricks for optimizing your website’s performance.</p>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Read more →</a>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-200 py-6 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 My Awesome Blog. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
