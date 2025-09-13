@extends('layouts.app')
@section('title','Edit Post')
@section('content')
  <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
  <form method="POST" action="{{ route('posts.update', $post) }}" class="bg-white border rounded p-4">
    @method('PUT') @include('posts._form')
  </form>
@endsection
