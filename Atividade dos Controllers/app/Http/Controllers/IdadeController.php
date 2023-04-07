<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;


class IdadeController extends Controller
{
    public function idade ($ano,$mes,$dia) {
        $dataAtual = Carbon::now('America/Sao_Paulo');
        $nascimento = Carbon::createFromDate($ano, $mes, $dia, 'America/Sao_Paulo');
        $intervalo = $nascimento->diff($dataAtual);

        if($ano > $dataAtual->format('Y') || $ano == $dataAtual->format('Y')
            && $mes > $dataAtual->format('m') || $ano == $dataAtual->format('Y') 
            && $mes == $dataAtual->format('m') && $dia > $dataAtual->format('d')) {
            echo "Não é possível calcular uma data futura";
        }elseif  ($ano == $dataAtual->format('Y') && $mes == $dataAtual->format('m') && $dia==$dataAtual->format('d')){
            echo "A data sugerida indica o dia de hoje";
        }elseif ($dia == null || $mes == null){
            echo "Nasceu no Ano de: {$ano}";
        }else {
            echo "Nasceu no dia:" ."$dia/$mes/$ano";
            echo  "$intervalo->format('%y')}} anos";
            echo  "$intervalo->format('%m')}} meses"; 
            echo  "$intervalo->format('%d')}} dias";
            echo "a data é $intervalo";
        }
    }
    }
// 