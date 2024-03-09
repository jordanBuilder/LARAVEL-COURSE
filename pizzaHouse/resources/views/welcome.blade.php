@extends('Layouts.layout')
 @section('contenu')
    <div class="content">
        <img src="/img/pizza-house.png" alt=" pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <p class="msg">
            {{session('msg')}}
        </p>
        <a href="/pizzas/create" class="orderLink">Order a Pizza</a>
    </div>
 @endsection
