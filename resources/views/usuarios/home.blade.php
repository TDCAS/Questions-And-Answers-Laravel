@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 class="tituloposlogin">Home</h1></div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Escolha uma das opções a baixo</h3>

                    <a href="{{'/listquestion'}}" class="ancora"> <h5>* Listar questões para responder</h5></a>

                    <a href="{{'/newQuestions'}}" class="ancora"> <h5>* Criar pergunta</h5> </a>

                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
