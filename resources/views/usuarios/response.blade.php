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

                
                    
                    
                    <h1>Resposta </h1>

                    <p class="perguntatitulo">{{$qaa[Helper::shout($qaa)]->answer}}</p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
