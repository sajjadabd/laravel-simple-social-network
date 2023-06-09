@extends('layouts.master')

@section('content')
{{-- <p class="text-center pt-6">Welcome to Laravel</p> --}}

<form 
class="m-2 grid max-w-4xl justify-center bg-sky-100 mx-auto py-12"
action="/register" 
method="post">

  @csrf
  <label class="ml-3">Username : </label>
  <input 
  class="ml-3 border border-sky-400"
  id="username" 
  name="username" 
  value="{{ old('username') }}" 
  autocomplete="off"
  />
  @error('username')
    <span class="text-red-400 text-sm ml-3">{{$message}}</span>
  @enderror
  <br />
  

  <label class="ml-3">Password : </label>
  <input 
  class="ml-3 border border-sky-400"
  type="password"
  id="password" 
  name="password" 
  value="{{ old('password') }}" 
  autocomplete="off"
  />
  @error('password')
    <span class="text-red-400 text-sm ml-3">{{$message}}</span>
  @enderror
  
  <br />
  <button class="ml-3 mt-2 py-2 box-border border border-slate-500 hover:bg-slate-600 hover:text-white">Login</button>

</form>

@endsection


