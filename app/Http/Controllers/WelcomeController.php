<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome() {

        
    $idade = 25;
    $nome = "Diogo";

    echo("OI, meu nome é {$nome}, e tenho {$idade} anos de idade");

    }
}
