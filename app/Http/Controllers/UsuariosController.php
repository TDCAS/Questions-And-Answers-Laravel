<?php

namespace App\Http\Controllers;
use App\Models\QuestionsAndAnswers;
use Illuminate\Http\Request;
use Redirect;

class UsuariosController extends Controller
{ 
    public function searchQuestions() {
    
        $qaa = QuestionsAndAnswers::get();
    
 
        return view('usuarios.listquestion', ['qaa' => $qaa]);
}

    public function searchAnswers(string $id) {
        $consultq = QuestionsAndAnswers::from('questionsandanswers')->where('pk_idquestionsandanswers' , $id)->value('questions');

        
        $consulta = QuestionsAndAnswers::select('*')->from('tb_answers')->where('pk_idquestions' , $id)->get();
  
        $consultname  = QuestionsAndAnswers::select('name')->from('users')->get();
        

        return view('usuarios.response', ['consulta' => $consulta,'consultq' => $consultq,'id' => $id, 'consultname' => $consultname]);


    }

    



 

    

}