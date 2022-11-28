<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsAndAnswers extends Model
{
    protected $table = 'tb_questions';
     
    protected $fillable = ['questions','answer'];



}