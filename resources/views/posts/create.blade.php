@extends('layouts.app')
@section('title','New Post')
@section('content')
  <h1 class="text-2xl font-bold mb-4">New Post</h1>
  <form method="POST" action="{{ route('posts.store') }}" class="bg-white border rounded p-4">
    @include('posts._form')
  </form>
@endsection
