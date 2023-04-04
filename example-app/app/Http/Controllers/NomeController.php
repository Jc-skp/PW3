<?php

namespace App\Http\Controllers;

Class Nome extends Controller {
    public function name ($name) {
        echo "Olá ,$name, Seja bem-vindo ao meu site";
    }
}