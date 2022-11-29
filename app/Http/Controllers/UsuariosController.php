<?php

namespace App\Http\Controllers;
//importando alguns atributos da tabela utilizando a rota  use App\Models\QuestionsAndAnswers;
use App\Models\QuestionsAndAnswers;
//importando tabela de questions que retorna alguns atributos dela  da rota App\Models\Tb_questions;
use App\Models\Tb_questions;
//importando request (chamada)
use Illuminate\Http\Request;

//usando objeto que rediresiona para as view 
use Redirect;
//Controla as rotas e injeta dados nas mesmas
class UsuariosController extends Controller
{ 
        //faz consultas no banco utilizando o paramentro id que é passado listquestion.blade.php
    public function searchAnswers(string $id) {
        // faz uma consulta dentro do objeto QuestionsAndAnswers que consulta no banco 
        $consultq = QuestionsAndAnswers::from('tb_questions')->where('pk_idquestions', $id)->value('questions');
        // Consulta  todos answres e pk_idanswers da tabela tb_answers 
        $consulta = QuestionsAndAnswers::select('answers','pk_idanswers')->from('tb_answers')->get();
        return view('usuarios.response', ['consulta' => $consulta,'consultq' => $consultq,'id' => $id ]);
    }
    //function que pesquisa questao 
    public function searchQuestions() {
        // busca tb_questao, usando get
        $qaa = QuestionsAndAnswers::get();
        // direciona para view listquestion.blade.php e injeta a tb_questao nela 
        return view('usuarios.listquestion', ['qaa' => $qaa]);
}
    // function que so direciona
    public function newQuestions(){
        //retorna uma view que direciona para  createquestions.blade.php
        return view('usuarios.createquestions');
    }



// puxa os dados passados de createquestions.blade.php fuction usanda para criar dados na tabela tb_questions
    public function createQuestions(Request $request){
        // cria obejto do tb_questions importando para ca 
        $qaa = new  Tb_questions;
        //cria na tabela tb_questions todos dados passados no form do  createquestions.blade.php 
        $qaa = $qaa->create($request->all());
        //direcionando apos isso para pagina 'usuarios'
        return Redirect::to('usuarios');
    }

    public function newResponse(){
        return view('usuarios.createresponse');
    }

    



 

    

}