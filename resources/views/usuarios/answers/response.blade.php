@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header oloko"><h1 class="perguntatitulo">{{ __('Site de perguntas e resposta') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Pergunta</h1>                    
                    <h3>{{$consultQuestions}}</h3>
                    <h1>Respostas</h1>
                    <!--Lista todos  os valores de um lista($AnswersandPk_idanswers(tb_answers) onde $u é o valor unitario de cada item da lista(ele muda conforme a lista reinicia)) 
                    $u = linha da tabela 

                    $u->pk_idanswers = o id da tabela tb_answers

                    $u->answers =  seria cada pergunta
                --> 
                    @foreach($AnswersandPk_idanswers as $u)
                    
                    <h2>Respostas anonima {{$u->answers}}</h2>
                    
                    <h3>{{$u->answers}}</h3>
                    @endforeach
                   
                    <a href='/createresponse{{$id}}'> Cria uma resposta para pergunta </a>
            

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
