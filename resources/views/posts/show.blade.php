@extends('layouts.app')
@section('title', $post->title)
@section('content')
  <article class="bg-white border rounded p-6">
    <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
    <p class="text-gray-500 mt-2">Published {{ $post->created_at->format('Y-m-d H:i') }}</p>
    <div class="prose max-w-none mt-6 whitespace-pre-line">{{ $post->body }}</div>
  </article>
  <div class="mt-6">
    <a class="text-blue-600" href="{{ route('posts.edit', $post) }}">Edit</a>
  </div>
@endsection
