@extends('layouts.app')

@section('content')


<head>

    <style>
        .ancoralist{
            color:black;
            text-decoration:none;
            
        }

    </style>
</head>
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

                
                    <!--Lista todoso os valores de um lista($qaa(tb_questions) onde $u é o valor unitario de cada item da lista(ele muda conforme a lista reinicia))
                    $u = seria cada linha da tabela 
                    
                -->
                   
                    @foreach($tbQuestions as $u)
                  
                    <!--verifica se o a coluna(private) da tabela (tb_questions) e 0 se for ele motra a questão se não nao mostra nada -->
                        @if ($u->private == 0)
                            <h1>Pergunta {{Helper::consultId($u->fk_idusers)}}</h1>
                            
                            <a href="/response{{$u->pk_idquestions}}" class="ancoralist"> <h3>{{$u->questions}}</h3></a>
                        @endif

                  


               
                    @endforeach

                    


                    
                    
         
                    <p class="perguntatitulo"></p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
