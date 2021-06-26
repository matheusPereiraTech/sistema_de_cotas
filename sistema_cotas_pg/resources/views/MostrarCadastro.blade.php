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
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($alunos as $a)
                                <tr>
                                    <td> {{$a->id}}</td>
                                    <td>{{$a->nome}}</td>
                                    <td>{{$a->data_nascimento}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->sexo}}</td>
                                    <td>{{$a->raca}}</td>
                                    <td>{{$a->forma_ingresso}}</td>
                                    <td>{{$a->curso}}</td>
                                    <td>{{$a->status}}</td>
                                    <td>
                                    <a href="{{ route('alunos.edit', $a['id']) }}" clas="btn btn-sm btn-primary">Editar</a>
                                        <form action="{{ route('alunos.destroy', $a['id']) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                                        </form>
                                    </td>
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