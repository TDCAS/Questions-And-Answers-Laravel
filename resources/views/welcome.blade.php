@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1 class="titulowelcome">Bem vindo</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                    <p class="textwelcome">Click em "Login" se ja tiver conta Ou  <br>
                    "Cadastre-se"</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection