@extends('layouts.default')

@section('header')
    <h2>My Laravel Application By Zuhair</h2>
@endsection

@section('content')
    <h1>Welcome to the Home Page</h1>
    <p>This is a simple home page for our Laravel application.</p>

    <form action="{{ route('submitform') }}" method="POST">
        @csrf
        <label for="exampleInput">Example Input:</label>
        <input type="text" name="exampleInput" placeholder="Enter something" required>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('footer')
    <p>&copy; 2024 My Laravel Application updated</p>
@endsection
