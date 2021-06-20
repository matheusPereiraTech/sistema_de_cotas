@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p><h5 class="card-title">Cadastro de Aluno</h5>
                        <p><a href="/cadastro" class="btn btn-sm btn-primary" role="button">Cadastrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
