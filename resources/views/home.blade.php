@extends('layouts.master')

@section('content')
<p>Welcome to Laravel</p>

<form action="" method="post">
  @csrf
  <label>Email : </label>
  <input id="email" name="email" />
  <p></p>
  <label>Password : </label>
  <input id="password" name="password" />
</form>

@endsection


