<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Class crianda para ser o indicador da tabela do banco  Tb_questions
class Tb_questions extends Model
{
    //Cria uma variavel que guarda colunas especificas dentro delas
  protected $fillable = ['questions','fk_idusers','private'];


}