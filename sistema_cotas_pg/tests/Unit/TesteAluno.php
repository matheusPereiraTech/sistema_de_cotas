<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Aluno;

class TesteAluno extends TestCase
{
    /** @test */
    public function TesteAluno()
    {
        $aluno = new Aluno;

        $expected = [
            'nome',
            'data_nascimento',
            'curso'
        ];

        $arrayCompared = arraydiff($expected, $aluno->getFillable());

        dd($arrayCompared);

        $this->assertEquals(0, count($arrayCompared));
    }
}
