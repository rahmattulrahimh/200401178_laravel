<!-- resources/views/categories/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="categories" class="form-label">kategori</label>
            <textarea class="form-control" id="categories" name="categories" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
@endsection
