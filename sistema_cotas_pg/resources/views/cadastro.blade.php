@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

    <style>
        * {
            font-family: Courier New;
        }
    </style>

    <div class="card border">
        <div class="card-body">
            <form action="" method="POST">
                @csrf
                <fieldset>
                <legend>Cadastro de alunos</legend>
                <div class="form-group">
                    <label for="matricula">Matrícula</label>
                    <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Matrícula"><br><br>

                    <label for="dataNascimento">Data de nascimento</label>
                    <input type="text" class="form-control" name="dataNascimento" id="dataNascimento" placeholder="Data de nascimento"><br><br>

                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"><br><br>

                    <label for="sexo">Sexo</label>
                    <select name="sexo">
                        <option value="" selected>&nbsp;</option>
                        <option value="F">Feminino</option>
                        <option value="M">Masculino</option>
                    </select><br><br>

                    <label for="raca">Raça</label>
                    <input type="text" class="form-control" name="raca" id="raca" placeholder="Raça"><br><br>

                    <label for="forma_ingresso">Forma de ingresso?</label>
                    <input type="text" class="form-control" name="forma_ingresso" id="forma_ingresso" placeholder="Forma de ingresso"><br><br>

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                    <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                    <a href="/home" class="btn btn-sm btn-primary" role="button">Home</a>
                    <!--<button href="/home" type="submit" class="btn btn-primary btn-sm" role="button">Home</button>-->
                    <!--<button type="submit" href="/home" class="btn btn-sm btn-primary" role="button">Home</button>-->
                </fieldset>
            </form>
        </div>
    </div>



