@extends('todos.layout')



@section('content')

<h3> Create all your Todo's here    </h3>
<div class="card-body">

    <form  method="post" action="/todos/create">
        @csrf
        <input type="text" name="title"/>
        <input type="submit" value="create" />
    </form>

    <a href="/todos"> back to all to dos</a>
</div>
@endsection