@extends('todos.layout')

@section('content')
<h2> Edit Todo </h2>




<div class="card-body">

    <form  method="post" action="{{ route('todo.update', $todo->id) }}">
        @csrf
         @method("patch")
        <input type="text" name="title" value="{{ $todo->title }}"/>
        <input type="submit" value="update" />
    </form>

    <a href="/todos"> back to all to dos</a>
</div>

@endsection