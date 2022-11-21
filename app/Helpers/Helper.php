<?php

namespace App\Helpers;
use App\Models\QuestionsAndAnswers;
class Helper
{
    public static function shout($valor)
    {
        $contador = count($valor)  - 1 ;
        
        return rand(0,$contador);
    }
}