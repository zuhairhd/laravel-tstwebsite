@extends('layouts.app')
@section('title','Posts')
@section('content')
  <div class="flex items-center justify-between mb-4">
    <h1 class="text-2xl font-bold">Posts</h1>
    <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Create</a>
  </div>

  @if($posts->count())
    <ul class="space-y-4">
      @foreach ($posts as $post)
        <li class="bg-white border rounded p-4">
          <h2 class="text-xl font-semibold">
            <a href="{{ route('posts.show', $post) }}" class="hover:underline">{{ $post->title }}</a>
          </h2>
          <p class="text-gray-700 mt-2">{{ \Illuminate\Support\Str::limit($post->body, 160) }}</p>
          <div class="mt-3 flex gap-3">
            <a class="text-blue-600" href="{{ route('posts.edit', $post) }}">Edit</a>
            <form method="POST" action="{{ route('posts.destroy', $post) }}"
                  onsubmit="return confirm('Delete this post?')">
              @csrf
              @method('DELETE') {{-- method spoofing --}}
              <button class="text-red-600">Delete</button>
            </form>
          </div>
        </li>
      @endforeach
    </ul>

    <div class="mt-6">{{ $posts->links() }}</div>
  @else
    <p>No posts yet.</p>
  @endif
@endsection
