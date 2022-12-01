@extends('layouts.app')

@section('content')

</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header oloko"><h1 class="perguntatitulo">{{ __('Site de perguntas e resposta') }}</h1></div>

                <div class="card-body">
                    <!--Cria if verificando sessão-->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--Form que 'empurra' valores dentro dele para /createresponse/confirm' -->
                    <form action="{{url('/createresponse/confirm')}}" method=post>
                        <!--Cria token de segurança -->
                    @csrf
                    <label>Responda a pergunta?</label><br>
                    <input type="text" name="answers"><hr>


                    
                    <input type="hidden" name='fk_idquestions' value='{{$id}}'>
                    <button  type="submit"> Enviar resposta </button>

                    </form>
                    
         
                    <p class="perguntatitulo"></p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
