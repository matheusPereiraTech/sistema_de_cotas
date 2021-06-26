<html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Pagina de Alunos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    body {
        padding: 20px;
    }
    </style>
</head>

<body>
    <main role="main">
        <div class="row">
            <div class="container col-sm-10 offset-md-1">
                <div class="card border">
                    <div class="card-header">
                        <h5 class="card-title">Cadastro de Cliente</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="aluno">
                            <thead>
                                <tr>
                                    <th>

                                    </th>
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
                                    <td> {{$a->matricula}}</td>
                                    <td>{{$a->nome}}</td>
                                    <td>{{$a->data_nascimento}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->sexo}}</td>
                                    <td>{{$a->raca}}</td>
                                    <td>{{$a->forma_ingresso}}</td>
                                    <td>{{$a->curso}}</td>
                                    <td>{{$a->status}}</td>
                                    <td>
                                        <form action="{{ route('alunos.destroy', $a['matricula']) }}" method="POST">
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
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>

</html>