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

    public function searchAnswers() {
        $qaa = QuestionsAndAnswers::get();

        return view('usuarios.response' );
    }


 

    

}