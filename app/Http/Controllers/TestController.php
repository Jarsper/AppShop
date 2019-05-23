<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //definimos un método para llamar 
    //a la vista welcome
    public function welcome()
    {
    	//$a = 10;
    	//$b = 25;
    	//$c = $a+$b;
    	//return "El valor de la suma es: $c";
    	return view('welcome');
    }
}
