<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white">
        <div class="p-4">
            <img src="https://laracasts.com/images/logo/logo-triangle.svg" alt="Logo" class="h-8 w-auto">
        </div>
        <nav class="mt-5">
            <x-nav-link href="/home" class="block px-4 py-2">Home</x-nav-link>
            <x-nav-link href="/about" class="block px-4 py-2">About</x-nav-link>
            <x-nav-link href="/contact" class="block px-4 py-2">Contact</x-nav-link>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100">
        <header class="bg-white shadow p-4">
            <h1 class="text-2xl font-bold">
                {{ $heading ?? '' }}
            </h1>
        </header>
        <main class="p-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
