@extends('layouts.app')
 
@section('content')
    <div class="container">
    	<form action="{{ route('task.update', $task->id) }}">
    		<input type="text" name="task" value="{{ $task->task }}">
    		<select name="status">
    			<option @if ($task->status == 'to do') selected @endif value="to do">to do</option>
    			<option @if ($task->status == 'done') selected @endif value="done">done</option>
    		</select>
    		<input type="hidden" name="api_token" value="{{ $task->user->api_token}}">
    		{{ csrf_field() }}
    		<input type="submit" name="mubmit" value="submit">
    	</form>
    </div>
@endsection