@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="/create/todo" method="post">
            @csrf
            <input type="text" class="form-control input-lg" name="todo" placeholder="Create A New Todos">
            <input type="submit" button="btn btn-primary">
        </form>
    </div> 
</div>

<hr>


@foreach($todos as $todo)
{{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">Delete</a>
<a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-primary btn-xs">Update</a>
@if(!$todo->completed)
<a href="{{ route('todos.completed', ['id' => $todo->id ]) }}" class="btn btn-success btn-xs">Mark As Completed</a>
@else
<span class="text-success">Completed!</span>
@endif
<hr>
@endforeach

@stop