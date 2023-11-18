
<!-- resources/views/articles/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Articles</h1>

    <a href="{{ route('articles.create') }}" class="btn btn-success">Create Article </a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>NO ID</th>
                <th>title</th>
                <th>content</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
