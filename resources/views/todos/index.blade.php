@extends('todos.layout')

@section('content')
<div>
    <h3 class="text-2x1"> All the things you need Todo </h3>
    <a href="/todos/create" class="py-2 bg-blue-400"> create new </a>
</div>

    <ul>
        @foreach($todos as $todo)
        <li>  
            <p>{{ $todo->title }}</p>
            <a href="{{'/todos/'.$todo->id.'/edit'}}"> edit </a>
            <span class="fas fa-check" />
        </li>
        @endforeach
    </ul>

 @endsection   
