@extends('layouts.master')

@section('content')
<p class="text-center pt-6">Welcome to Laravel</p>

<form 
class="m-10 grid max-w-4xl justify-center bg-sky-100 mx-auto py-24"
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
  <label class="ml-3">Email : </label>
  <input 
  class="ml-3 border border-sky-400"
  id="email" 
  name="email" 
  value="{{ old('email') }}" 
  autocomplete="off"
  />
  @error('email')
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
  <label class="ml-3">Password Confirmation : </label>
  <input 
  class="ml-3 border border-sky-400"
  type="password"
  id="password_confirmation" 
  name="password_confirmation" 
  value="{{ old('password_confirmation') }}"  
  autocomplete="off"
  />
  @error('password_confirmation')
    <span class="text-red-400 text-sm ml-3">{{$message}}</span>
  @enderror
  <br />
  <button class="ml-3 mt-2 py-2 box-border border border-slate-500 hover:bg-slate-600 hover:text-white">Register</button>
</form>

@endsection


