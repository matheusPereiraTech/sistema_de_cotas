@extends('layouts.app')

@section('content')

<div class="card border">
    <div class="card-body">
    <form action="{{ route('alunos.update', $alunos['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset>
                <legend>Cadastro de alunos</legend>
                <div class="form-group">

                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Nome"><br><br>

                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" value=""
                        placeholder="Data de nascimento"><br><br>

                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value=""
                        placeholder="E-mail"><br><br>

                    <label for="sexo">Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="" default selected>Escolha:</option>
                        <option value="F">Feminino</option>
                        <option value="M">Masculino</option>
                    </select><br><br>

                    <label for="raca">Raça</label>
                    <select name="raca" class="form-control">
                        <option value="" default selected>Escolha:</option>
                        <option value="Branco">Branco</option>
                        <option value="Pardo">Pardo</option>
                        <option value="Preto">Preto</option>
                        <option value="Indígena">Indígena</option>
                        <option value="Amarelo">Amarelo</option>
                    </select><br><br>

                    <label for="forma_ingresso">Forma de ingresso</label>
                    <input type="text" class="form-control" name="forma_ingresso" id="forma_ingresso" value=""
                        placeholder="Forma de ingresso"><br><br>

                    <label for="curso">Curso</label>
                    <input type="text" class="form-control" name="curso" id="curso" value=""
                        placeholder="Curso"><br><br>

                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="" default selected>Escolha:</option>
                        <option value="Cursando">Cursando</option>
                        <option value="Graduado">Graduado</option>
                        <option value="Não Iniciado">Não Iniciado</option>
                        <option value="Trancado">Trancado</option>
                    </select><br><br>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <a href="/home" class="btn btn-sm btn-danger" role="button">Cancelar</a>
                    

            </fieldset>
        </form>
        @if ($errors->any())
        <div class="card-footer">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

@endsection