<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_questions extends Model
{
  protected $fillable = ['questions','fk_idusers','private'];


}