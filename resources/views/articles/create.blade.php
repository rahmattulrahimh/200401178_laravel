<!-- resources/views/articles/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Article</h1>

    <form action="/articles" method="post">
    @csrf
    <label for="title">title:</label>
    <input type="text" id="title" name="title">
    
    <label for="content">content:</label>
    <textarea id="content" name="content"></textarea>

    <label for="genre">Genre:</label>
    <input type="text" id="genre" name="genre">
    
    <button type="submit">Submit</button>
</form>
