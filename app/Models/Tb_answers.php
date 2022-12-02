<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Class crianda para ser o indicador da tabela do banco  Tb_answers
class Tb_answers extends Model
{
  //Cria uma variavel que guarda colunas especificas dentro delas
  protected $fillable = ['answers','fk_idquestions','fk_idusers'];


}