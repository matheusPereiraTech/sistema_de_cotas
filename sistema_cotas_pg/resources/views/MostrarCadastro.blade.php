@extends('layouts.app')

@section('content')
<main role="main">
    <div class="row">
        <div class="container col-sm-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <h5 class="card-title">Alunos cadastrados</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover" id="aluno">
                        <thead>
                            <tr>
                                <th>Matricula</th>
                                <th>Nome</th>
                                <th>Data de Nascimento</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Raça</th>
                                <th>Forma Ingresso</th>
                                <th>Curso</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alunos as $a)
                            <tr>
                                <td>{{$a->matricula}}</td>
                                <td>{{$a->nome}}</td>
                                <td>{{$a->data_nascimento}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->sexo}}</td>
                                <td>{{$a->raca}}</td>
                                <td>{{$a->forma_ingresso}}</td>
                                <td>{{$a->curso}}</td>
                                <td>{{$a->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection