<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class AlunoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNewAluno()
{
    
        $aluno = new Aluno(
            [
            'id'=>0,
            'data_nascimento'=>"01/03/1999",
            'nome'=>"Matheus",
            'email'=>"matheuscelsopreira@gmail.com",
            'sexo'=>"masculino",
            'raça'=>"branco",
            'forma_ingresso'=>"Sisu",
            'curso'=>'ADS',
            'status'=>"Cursando"
            ]);
        
            $this->assertEquals('Matheus', $aluno->nome);
   }
}