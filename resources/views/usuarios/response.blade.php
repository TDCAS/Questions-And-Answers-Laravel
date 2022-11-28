@extends('layouts.app')

@section('content')
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

                    <h1>Pergunta</h1>                    
                    <h3>{{$consultq}}</h3>
                    <h1>Respostas</h1>
                    @foreach($consulta as $u)

                    <h2>Respostas anonima {{$u->pk_idanswers}}</h2>
                    <h3>{{$u->answers}}</h3>
                    @endforeach
                   
            

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
