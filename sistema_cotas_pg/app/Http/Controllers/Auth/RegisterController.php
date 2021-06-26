<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
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
        $alunos -> nome = $request -> input('nome');
        $alunos -> data_nascimento = $request -> input('data_nascimento');
        $alunos -> email = $request -> input('email');
        $alunos -> sexo = $request -> input('sexo');
        $alunos -> raca = $request -> input('raca');
        $alunos -> forma_ingresso = $request -> input('forma_ingresso');
        $alunos -> curso = $request -> input('curso');
        $alunos -> status = $request -> input('status');
        $alunos -> save();
        return redirect('/alunos');
        
    }
}
