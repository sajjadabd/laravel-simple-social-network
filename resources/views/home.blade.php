@extends('layouts.master')

@section('content')
<p>Welcome to Laravel</p>

<form action="/register" method="post">
  @csrf
  <label>Username : </label>
  <input id="username" name="username" />
  @error('username')
    <span>{{$message}}</span>
  @enderror
  <br />
  <label>Email : </label>
  <input id="email" name="email" />
  @error('email')
    <span>{{$message}}</span>
  @enderror
  <br />
  <label>Password : </label>
  <input id="password" name="password" />
  @error('password')
    <span>{{$message}}</span>
  @enderror
  <br />
  <label>Password Confirmation : </label>
  <input id="password_confirmation" name="password_confirmation" />
  @error('password_confirmation')
    <span>{{$message}}</span>
  @enderror
  <br />
  <button>Register</button>
</form>

@endsection


