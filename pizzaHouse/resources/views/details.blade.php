@extends('Layouts.layout')

@section('contenu')
<div class="ml-4 text-lg leading-7 font-semibold pizzaTitleDiv"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white pizzaTitle">PIZZAS LIST</a>
    </div>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8 pizzaListSection">
<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
</div>
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
<div class="grid grid-cols-1 md:grid-cols-2">
<div class="p-6">
<div class="flex titleDiv">
</div>

<div class="ml-12">
    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
    <h1> Pizzas List -- {{$id}} </h1>
    </div>
</div>   
</div>
</div>
</div>
@endsection
