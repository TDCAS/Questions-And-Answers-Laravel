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

                
                    
                    
                    <h1>Crie sua pergunta  </h1>
                
                    
                    <form action="{{ url('usuarios/createquestions')}}" method=post>
                    @csrf
                    <label>Qual sua Pergunta?</label><br>
                    <input type="text" name="questions"><hr>

                    <label >Private</label><br>
                        <input type="radio" name="private" value=1>True
                        <input type="radio" name='private' value=0>False


                    
                    <input type="hidden" name='fk_idusers' value='{{ Auth::user()->id }}'>
                    <button  type="submit"> Enviar resposta </button>

                    </form>
                    


                 
            

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
