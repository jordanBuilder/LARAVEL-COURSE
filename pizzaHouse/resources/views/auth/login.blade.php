@extends('Layouts.layout')

@section('contenu')
@extends('Layouts.layout')

@section('contenu')
    <div class="wrapper ">
       <h1>Log in</h1> 
       <form action="{{route('auth.login')}}" method="POST">
        @csrf
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="{{old('email')}}">
        @error("email")
        {{$message}}
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">
       
      <button class="btn">
         Se connecter
      </button>
       </form>
    </div>

@endsection

@endsection
