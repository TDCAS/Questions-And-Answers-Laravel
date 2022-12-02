<?php

namespace App\Helpers;
use App\Models\QuestionsAndAnswers;
use App\Models\User;
class Helper
{
    public static function randomvalue($value)
    {
        $cont = count($value)  - 1 ;
        
        return rand(0,$cont);
    }

    public static function consultId($value){
        $tbuser = User::select('id','name')->from('users')->where('id',$value)->value('name');

        return $tbuser;
    }

}