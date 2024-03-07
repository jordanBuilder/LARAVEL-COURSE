<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{   
    //fonction definie pour la route '/pizzas'

    public function index(){
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
    }

    public function show($id){
         //use the $id variable to query the db for a record
     return view('details',['id'=>$id]); 
    }

    public function revisionController(){
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
    }
}
