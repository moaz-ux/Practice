@extends('layouts.app')

@section('content')
<div class="container">
<form action="/event/{{$event->id}}" method="post" class="event">
    @csrf
    @method('PUT')
    <label for="name">Name:</label> <br>
    <input type="text" name="name" id="" value="{{$event->name}}"><br>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <label for="address">Address:</label> <br>
    <input type="text" name="address" id="" value="{{$event->address}}"><br> <br>
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <label for="started">Started At</label> 
    <input type="date" name="started_at" id="" value="{{$event->started_at}}"> <br>
    @error('started_at')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <label for="finished">Ended At</label> 
    <input type="date" name="ended_at" id="" value="{{$event->finished_at}}"> <br>
    @error('finished_at')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit" value="Update">
<input type="submit" value="Delete">    
@method("DELETE")

</form>
</div>
@endsection
