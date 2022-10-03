<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Italok extends Controller
{
 public function italok(){
    return view("italok");


 }
 public function submisDrink(StoreDrinkData $request){
    $request-validated();
    print_r($request->all());
 }
}
