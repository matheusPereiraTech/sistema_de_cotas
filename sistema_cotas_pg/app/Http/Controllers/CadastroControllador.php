<?php

namespace App\Http\Controllers;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CadastroControllador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('mostrarcadastro',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $regras=[
            'data_nascimento'=>'required',
            'nome'=>'required|unique:alunos',
            'email'=>'required|email|unique:alunos',
            'sexo'=>'required',
            'raca'=>'required',
            'curso'=>'required|max:100',
            'status'=>'required',
        ];
        $mensagens = [
            'required'=> 'O campo :attribute não pode estar vazio',
            'email.email' => 'Digite um email válido',
            'curso.max' => 'Digite um tamanho válido ',
        ];

        $request->validate($regras, $mensagens);

        $alunos = new Aluno();
        $alunos -> matricula = $request -> input('matricula');
        $alunos -> data_nascimento = $request -> input('data_nascimento');
        $alunos -> nome = $request -> input('nome');
        $alunos -> email = $request -> input('email');
        $alunos -> sexo = $request -> input('sexo');
        $alunos -> raca = $request -> input('raca');
        $alunos -> forma_ingresso = $request -> input('forma_ingresso');
        $alunos -> curso = $request -> input('curso');
        $alunos -> status = $request -> input('status');
        $alunos -> save();
        return redirect('/alunos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('MostrarCadastro');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
