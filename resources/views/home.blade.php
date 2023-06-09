@extends('layouts.master')

@section('content')
<p>Welcome to Laravel</p>

<form action="/register" method="post">
  @csrf
  <label>Username : </label>
  <input id="username" name="username" />
  <br />
  <label>Email : </label>
  <input id="email" name="email" />
  <br />
  <label>Password : </label>
  <input id="password" name="password" />
  <br />
  <button>Register</button>
</form>

@endsection


