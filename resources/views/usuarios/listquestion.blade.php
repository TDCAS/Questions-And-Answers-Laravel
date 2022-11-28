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
                <div class="card-header oloko"><h1 class="perguntatitulo">{{ __('Pergunta') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
             
                    @foreach($qaa as $u)
                    <h1>Pergunta {{$u->pk_idquestionsandanswers}}</h1>
            
                    <a href="/response{{$u->pk_idquestions}}" class="ancoralist"> <h3>{{$u->questions}}</h3></a>


               
                    @endforeach

                    


                    
                    
         
                    <p class="perguntatitulo"></p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
