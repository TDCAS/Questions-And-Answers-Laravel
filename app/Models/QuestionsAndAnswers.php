<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//importa o Model 
use Illuminate\Database\Eloquent\Model;
//classe com nome da tabela que enxtende o MODEL
class QuestionsAndAnswers extends Model
{
    //chama tabela tb_questions 
   protected $table = 'tb_questions';
     //chama algumas colunas da tabela
    protected $fillable = ['questions','answers'];



}