<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
        	'razao_social'=>'Reginaldo Barreto Santiago',
            'cnpj' => '26879525000128',
            'email' => '',
            'telefone' => ''
        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Casa do Agricultor',
                'cnpj' => '04719693000128',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Cestão Supermercado',
                'cnpj' => '96799960000132',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Clarinha Confecções',
                'cnpj' => '04352461000184',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Casa Mata',
                'cnpj' => '07434696000103',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Dsuco',
                'cnpj' => '23250291000171',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Fast Collor Boulevard',
                'cnpj' => '23843651000149',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
            'razao_social'=>'Hiper Frutas',
            'cnpj' => '24095324000119',
            'email' => '',
            'telefone' => ''

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'J. Des. Leite Material de Construção',
                'cnpj' => '08812167000169',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'O Bicho',
                'cnpj' => '08761479000190',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Rodrido Bastos Araujo',
                'cnpj' => '13520749000101',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Silterm',
                'cnpj' => '12960601000125',
                'email' => '',
                'telefone' => '',

        ]);

        DB::table('clientes')->insert([
                'razao_social'=>'Sangue Bom Montagens',
                'cnpj' => '03372168000116',
                'email' => '',
                'telefone' => '',

        ]);
    }
}
