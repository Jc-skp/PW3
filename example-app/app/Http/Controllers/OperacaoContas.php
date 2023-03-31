<?php


namespace App\Http\Controllers;

Class OperacaoContas extends Controller {
    public function soma (int $number1,int $number2) {
        $result = $number1 + $number2;
        echo "Soma = $result"; 
    }
    public function subtração (int $number1,int $number2) {
        $result = $number1 - $number2;
        echo "Soma = $result"; 
    }
    public function multiplicacao (int $number1,int $number2) {
        $result = $number1 * $number2;
        echo "Soma = $result"; 
    }      
    public function divisao (int $number1,int $number2) {
        $result = $number1 / $number2;
        echo "Soma = $result"; 
    }
    public function todas (int $number1,int $number2) {
        $result1 = $number1 + $number2;
        $result2 = $number1 - $number2;
        $result3 = $number1 * $number2;
        $result4 = $number1 / $number2;
        echo "Soma = $result1";
        echo "Soma = $result2";
        echo "Soma = $result3";
        echo "Soma = $result4"; 
    }  
};