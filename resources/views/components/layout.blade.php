<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Homepage</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <x-main-header />

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <x-main-footer />
</body>

</html>
