<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::all();
        return view('todos.index')->with(['todos' => $todo]);    
    }

    public function create()
    {
        return view('todos.create');    
    }

    public function store(TodoCreateRequest $request)
    {     
           Todo::create($request->all());
           return redirect()->back()->with('message','Todo created succesfully');
    }

    public function edit(Todo $todo)
    {
        dd($todo->title);
        // $todo = Todo::find($id);
        // return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
       $todo->update(['title'=>$request->title]);
       return redirect(route('todo.index'))->with('message', 'Update');
    }
}
