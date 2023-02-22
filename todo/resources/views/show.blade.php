@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary mt-2">Go Back</a>
    <h2 class="mt-2">{{ $todo->title }}</h2>
    <div>Due: <span class="badge badge-danger text-danger">{{ $todo->due }}</span></div>
    <hr>
    <p>{{ $todo->content }}</p>
	<div>Created: <span class="badge badge-danger text-primary">{{ $todo->created_at }}</span></div>
	<div>Last Updated: <span class="badge badge-danger text-primary">{{ $todo->updated_at }}</span></div>
	<div class="row py-3">
		<div class="col-6 text-start">
			<a href="/todo/{{ $todo->id }}/edit" class="btn btn-warning">Edit</a>
		</div>
		<div class="col-6 text-end">					 
		 <form method="post" action="/todo/{{ $todo->id }}">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
		</div>
	</div>    
@endsection
