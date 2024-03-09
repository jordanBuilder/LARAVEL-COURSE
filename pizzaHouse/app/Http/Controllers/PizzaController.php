<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;


class PizzaController extends Controller
{   
    //fonction definie pour la route '/pizzas'

    public function index(){

    $pizzas = Pizza::all();
   // $pizzas = Pizza::orderBy('name','desc')->get(); 
    //$pizzas = Pizza::where('type','hawaien')->get();
    //$pizzas = Pizza::latest()->get();
    
         return view('pizzas.index',['pizzas' => $pizzas,

         'name' => request('name'),
         "autreParametre" => request('autreParametre'),
         'troisiemeParam'=> request('autreParametre'),
         'quatrieme' => request('quatrieme')
     ]); 
    }

    public function show($id){
         //use the $id variable to query the db for a record

         //$pizza = Pizza::where('id',$id)->get();

         $pizza = Pizza::findOrFail($id);

         //$pizza = Pizza::find($id);

     return view('pizzas.show',['pizza'=>$pizza]); 
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

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        
        // $pizza->save();
        error_log(request('toppings'));
         
      return   redirect('/')->with('msg','thanks for your order');
    }
} 
