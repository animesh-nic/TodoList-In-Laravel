<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
		$todos = Todo::orderBy('created_at', 'desc')->get();

        return response(view('index')->with('todos', $todos));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
		return response(view('create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
		$this->validate($request,
            [
                'title' => 'required',
                'content' => 'required',
                'due' => 'required'
            ]
        );

        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
		$todo->is_completed = false;
        $todo->save();

        return redirect('/')->with('success', 'Todo created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
		$todo = Todo::find($id);

        return response(view('show')->with('todo', $todo));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
		$todo = Todo::find($id);
		return response(view('edit')->with('todo', $todo));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
		$todo = Todo::find($id);
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->due = $request->input('due');
		$todo->is_completed = ($request->input('is_completed')) ? true : false;
        $todo->save();

        return redirect('/')->with('success', 'Todo edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
		$todo = Todo::find($id);
        $todo->delete();

        return redirect('/')->with('success', 'Todo deleted successfully!');
    }
}
