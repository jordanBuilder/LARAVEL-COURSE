<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas = [
       ['type' => 'hawaian',
        'base' => 'chees crust'    
    ],
    
       ['type' => 'italian',
       'base' => 'garlic crust'],

       ['type' => 'Veg suprem',
       'base' => 'thin & crispy'],

];
    
    
    return view('pizzas',['pizzas' => $pizzas,
    'name' => request('name'),
    "autreParametre" => request('autreParametre'),
    'troisiemeParam'=> request('autreParametre'),
    'quatrieme' => request('quatrieme')
]);   
});



Route::get('/revision',function(){
    $pizzas = [
        ['type' => 'hawaian',
         'base' => 'chees crust'    
     ],
     
        ['type' => 'italian',
        'base' => 'garlic crust'],
 
        ['type' => 'Veg suprem',
        'base' => 'thin & crispy'],
 
 ];
    return view('revision',['food'=> $pizzas]);
});
