@extends('layouts.app')

@section('content')
    <h2 class="mt-2">Todo's List</h2>
    @if (count($todos) > 0)
		@php 
			$n=1;
		@endphp
        <div class="accordion mb-3" id="accordionTodo">
		@foreach ($todos as $todo)            
		  <!-- Accordion Code -->
		  <div class="accordion-item">
            <h4 class="accordion-header" id="heading_{{ $todo->id }}">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $todo->id }}" aria-expanded="false" aria-controls="collapse_{{ $todo->id }}">
                {{ $todo->title }}
				<div class="badge badge-danger text-end text-success">				
					@if($todo->is_completed == true)					
						<span class="text-success">Completed</span>
					@else
						<span class="text-danger">Open</span>
					@endif
				</div>
              </button>
            </h4>
            <div id="collapse_{{ $todo->id }}" class="accordion-collapse collapse {{ ($n==1) ? 'show' : ''; }}" aria-labelledby="heading_{{ $todo->id }}" data-bs-parent="#accordionTodo">
              <div class="accordion-body">
                {{ $todo->content }}
				<div>Due: <span class="badge text-danger">{{ $todo->due }}</span></div>
				<div class="row py-3">
					<div class="col-6 text-start">
						<a href="todo/{{ $todo->id }}" class="btn btn-primary">View</a>
						<a href="todo/{{ $todo->id }}/edit" class="btn btn-warning">Edit</a>
					</div>
					<div class="col-6 text-end">					 
					 <form method="post" action="/todo/{{ $todo->id }}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
					</div>
				</div>
				<div class="card-footer text-muted">				  
				  Created: {{ $todo->created_at }}				  
				</div>
              </div>
            </div>
          </div>
		  @php 
			$n++; 
		  @endphp
        @endforeach
		</div>
    @endif
@endsection
