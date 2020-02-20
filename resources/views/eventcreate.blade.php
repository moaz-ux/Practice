@extends('layouts.app')

@section('content')
<div class="container">
<form action="/event" method="post" class="event">
    @csrf
    <label for="name">Name:</label> <br>
    <input type="text" name="name" id=""><br> <br>
    <label for="address">Address:</label> <br>
    <input type="text" name="address" id=""><br> <br>
    <label for="started">Started At</label> 
    <input type="date" name="started_at" id=""> <br>
    <label for="finished">Ended At</label> 
    <input type="date" name="ended_at" id=""> <br>
<input type="submit" value="submit">
</form>
</div>
@endsection
