@extends('layouts.app')

@section('content')
    <h2 class="mt-2">Create new Todo</h2>
    <form method="post" action="/todo">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Enter content" value="{{ old('content') }}">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" class="form-control" name="due" id="due" placeholder="Enter due" value="{{ old('due') }}">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
@endsection
