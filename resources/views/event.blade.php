@extends('layouts.app')

@section('content')
    @foreach ($event as $eve)
    <div class="container" style="border-style: solid; border-radius: 20px;">
        <h1>Name : <br>  <a href="/event/{{$eve->id}}/edit" style="text-decoration:none; color:red;">
            {{ $eve->name }}</h1></a>
        <h1>Address : <br>{{ $eve->address }}</h1>
        <h3>Started At: <br> {{$eve->started_at}}</h3>
        <h3>Ended At: <br> {{$eve->finished_at}}</h3>
    </div> 
<br>
    @endforeach
@endsection
