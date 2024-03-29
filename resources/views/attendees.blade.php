@extends('template.html');

@section('title')
    Register
@endsection

@section('content')
<h1>Welcome to attendees page</h1>
<form action="{{route('submit.attendees')}}" method="post" style="text-align:center;">
    @csrf
    <label for="name">
        @error('name')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="text" name="name" placeholder="Name">
    <label for="age">
        @error('age')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="text" age="age" placeholder="age">
    <label for="address">
        @error('address')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="text" address="address" placeholder="address">
    <label for="username">
        @error('username')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="text" name="username" placeholder="Username">
    <label for="password">
        @error('password')
            <span style="color:red">{{$message}}</span>
        @enderror
    </label>
    <input type="password" name="password" placeholder="Password">
    <button>Attendees</button>
</form>
@endsection