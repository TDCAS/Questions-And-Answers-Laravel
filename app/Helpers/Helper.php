<?php

namespace App\Helpers;
use App\Models\QuestionsAndAnswers;
class Helper
{
    public static function randomvalue($value)
    {
        $cont = count($value)  - 1 ;
        
        return rand(0,$cont);
    }

    public static function contname($value){

    }

}