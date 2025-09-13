<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Posts App')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Quick Tailwind (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
  <nav class="bg-white border-b">
    <div class="container mx-auto px-4 py-3 flex justify-between">
      <a href="{{ route('posts.index') }}" class="font-semibold">Posts</a>
      <a href="{{ route('posts.create') }}" class="text-blue-600">New Post</a>
    </div>
  </nav>

  <main class="container mx-auto px-4 py-6">
    @if (session('success'))
      <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-3">
        {{ session('success') }}
      </div>
    @endif

    @yield('content')
  </main>
</body>
</html>
