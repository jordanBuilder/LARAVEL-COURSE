@extends('Layouts.layout')

@section('contenu')

<div class="wrapper pizza-details">
   <h1>Order For {{$pizza->name}}</h1>
   <p class="type">
    Type - {{$pizza->type}}
   </p>
   <p class="base">
    Base - {{$pizza->base}}
   </p>
</div>
<a href="/pizzas" class="back h1">Back to all pizzas</a>
@endsection
