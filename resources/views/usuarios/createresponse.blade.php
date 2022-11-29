@extends('layouts.app')

@section('content')

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

  
                    


                    
                    
         
                    <p class="perguntatitulo"></p>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
