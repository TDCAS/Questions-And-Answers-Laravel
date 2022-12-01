<?php

namespace App\Http\Controllers;
//importando alguns atributos da tabela utilizando a rota  use App\Models\QuestionsAndAnswers;
use App\Models\QuestionsAndAnswers;
//importando tabela de questions que retorna alguns atributos dela  da rota App\Models\Tb_questions;
use App\Models\Tb_questions;
//importando request (chamada)
use Illuminate\Http\Request;

use App\Models\Tb_answers;

//usando objeto que rediresiona para as view 
use Redirect;
//Controla as rotas e injeta dados nas mesmas
class UsuariosController extends Controller
{ 
        //faz consultas no banco utilizando o paramentro id que é passado listquestion.blade.php
    public function searchAnswers(string $id) {
        // faz uma consulta dentro do objeto idquestions que retorna a coluna questions 
        $consultQuestions = Tb_questions::from('tb_questions')->where('pk_idquestions', $id)->value('questions');
        // Consulta  todos answres e pk_idanswers da tabela tb_answers 
        $answersandPk_idanswers = Tb_answers::select('answers','pk_idanswers')->from('tb_answers')->get();
        return view('usuarios.answers.response', ['AnswersandPk_idanswers' => $answersandPk_idanswers,'consultQuestions' => $consultQuestions,'id' => $id ]);
    }

///route createresponse{id} chama newResponse passado um id e redirecionado  para 'usuarios.answers.createresponse' injetando variavel id
    public function newResponse($id){
        return view('usuarios.answers.createresponse' , ['id' => $id]);
    }

    //function que pesquisa questao 
    public function searchQuestions() {
        // busca tb_questao, usando get
        $tbQuestions = Tb_questions::get();

        
        // direciona para view listquestion.blade.php e injeta a tb_questao nela 
        return view('usuarios.question.listquestion', ['tbQuestions' => $tbQuestions]);
}
    // function que so direciona
    public function newQuestions(){
        //retorna uma view que direciona para  createquestions.blade.php
        return view('usuarios.question.createquestions');
    }



// puxa os dados passados de createquestions.blade.php, fuction é  usanda para criar dados na tabela tb_questions
    public function createQuestions(Request $request){
        // cria obejto do tb_questions importando para ca 
        $tbQuestions = new  Tb_questions;
        //cria na tabela tb_questions todos dados passados no form do  createquestions.blade.php 
        $tbQuestions = $tbQuestions->create($request->all());
        //direcionando apos isso para pagina 'usuarios'
        return Redirect::to('usuarios');
    }

//puxa  puxa os dados passados de createResponse.blade.php, function é usada para pegar dados da view e empurrar para o banco de dados
    public function createResponse(Request $request) {
                //Variavel que guarda o objeto tb_answers
                $colunmTbanswers = new Tb_answers;
                //Cria uma linha usando dados passado da request, empurrando todos dados para o banco.
                $colunmTbanswers = $colunmTbanswers->create($request->all());
                //redireciona para 'usuarios'
        return Redirect::to('usuarios');
    }

    


/*

        //Variavel que guarda o objeto tb_answers
        $colunmTbanswers = new Tb_answers;
        //Cria uma linha usando dados passado da request, empurrando todos dados para o banco.
        $colunmTbanswers = $colunmTbanswers->create($request->all());
        //redireciona para 'usuarios'
 

  */  

}