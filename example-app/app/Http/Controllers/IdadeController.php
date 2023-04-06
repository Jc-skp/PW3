<?php

namespace App\Http\Controllers;

class IdadeController extends Controller
{
    public function idade ($ano,$mes,$dia) {
        $actualDate = new DateTime("now");
        $birthDate = new DateTime($ano.$mes.$dia);
        $dateInterval = $birthDate->diff($actualDate);

        if($ano > $actualDate->format('Y') || $ano == $actualDate->format('Y')
            && $mes > $actualDate->format('m') || $ano == $actualDate->format('Y') 
            && $mes == $actualDate->format('m') && $dia > $actualDate->format('d')) {
            echo "Não é possível calcular uma data futura";
        }elseif  ($ano == $actualDate->format('Y') && $mes == $actualDate->format('m') && $dia==$actualDate->format('d')){
            echo "A data sugerida indica o dia de hoje";
        }elseif ($dia == null || $mes == null){
            echo "Nasceu no Ano de: {$ano}";
        }else {
            echo "Nasceu no dia:" ."$dia/$mes/$ano";
            echo  "$dateInterval->format('%y')}} anos";
            echo  "$dateInterval->format('%m')}} meses"; 
            echo  "$dateInterval->format('%d')}} dias";
            echo "a data é $dateInterval";
        }
    }
    }

