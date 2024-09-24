<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array (
            array("name" => 'Engenheiro Mecânico'),
            array("name" => 'Engenheiro Elétrico'),
            array("name" => 'Engenheiro Civil'),
            array("name" => 'Engenheiro Automação'),
            array("name" => 'Analista de Manutenção'),
            array("name" => 'Analista de Projetos'),
            array("name" => 'Analista de Sistemas'),
            array("name" => 'Coordenador de Manutenção'),
            array("name" => 'Gerente de Manutenção'),
            array("name" => 'Planejador de Manutenção'),
            array("name" => 'Programador de Manutenção'),
            array("name" => 'Técnico em Refrigeração'),
            array("name" => 'Técnico em Mecânica'),
            array("name" => 'Técnico em Eletrotécnica'),
            array("name" => 'Técnico em Automação'),
            array("name" => 'Artífice de Manutenção'),
            array("name" => 'Supervisor de Manutenção'),
            array("name" => 'Supervisor de Limpeza'),
            array("name" => 'Supervisor de Jardinagem'),
            array("name" => 'Jardineiro'),
            array("name" => 'Pedreiro'),
            array("name" => 'Servente'),
            array("name" => 'Mestre de obras'),
            array("name" => 'Auxiliar de elétrica'),
            array("name" => 'Auxiliar de mecânica'),
            array("name" => 'Auxiliar de automação'),
            array("name" => 'Auxiliar de refrigeração'),
            array("name" => 'Desenvolvedor de sistemas'),
            array("name" => 'Copeiro'),
            array("name" => 'Pintor'),
            array("name" => 'Eng. de Segurança do Trabalho'),
            array("name" => 'Técnico em Segurança do Trabalho'),
            array("name" => 'Comprador'),
            array("name" => 'Assistente administrativo'),
            array("name" => 'Técnico em Edificações'),
            array("name" => 'Analista de TI'),
            array("name" => 'Técnico de TI'),
            array("name" => 'Engenheiro de Software'),
            array("name" => 'Engenheiro de TI'),
            array("name" => 'Bombeiro hidráulico'),
            array("name" => 'Designer Gráfico'),
            array("name" => 'Auxiliar administrativo'),
            array("name" => 'Auxiliar de limpeza'),
            array("name" => 'Engenheiro de Manutenção'),
            array("name" => 'Engenheiro de Projetos'),
            array("name" => 'Engenheiro de Planejamento'),
            array("name" => 'Analista de Meio Ambiente'),
            array("name" => 'Técnico de Meio Ambiente'),
            array("name" => 'Engenheiro de Meio Ambiente'),
            array("name" => 'Técnico em CFTV'),
            array("name" => 'Manutenção Predial'),
            array("name" => 'Outros'),
        );

        DB::table('type_services')->insert($data);
    }
}
