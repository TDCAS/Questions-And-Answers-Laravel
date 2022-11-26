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

                
                    
                    
                    <h1>Pergunta  </h1>

                    <p class="perguntatitulo">{{$qaa[2]->questions}}</p>
                    
                    <form action="{{ url('usuarios/respostadousuario')}}" method=get>
                    <label class="inputs">TRUE <input type="radio" name="value"></label>
                    <label class="inp+*-uts">FALSE<input type="radio" name="value2"> </label>
                      <button class="but" type="submit"> Enviar resposta </button>

                    </form>
                    


                 
            

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
