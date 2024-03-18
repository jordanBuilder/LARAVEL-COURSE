@extends('Layouts.layout')

@section('contenu')
    <div class="wrapper create-pizza">
       <h1>Create a New Pizza</h1> 
       <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your name: </label>
        <input type="text" id="name" name="name">

        <label for="type">Choose pizza type: </label>
        <select name="type" id="tye">
            <option value="margarita">Margarita</option>
            <option value="Hawaien">Hawaien</option>
            <option value="Veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>

        <label for="base">Choose base type: </label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="thick">thick</option>
        </select>
        <fieldset>
            <label for="">
                Extra Toppings: </br> 
            </label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>
        <input type="submit" value="Order Pizza">
       </form>
    </div>

@endsection
