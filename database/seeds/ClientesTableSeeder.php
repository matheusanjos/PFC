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
            'cnpj' => '123456789',
            'email' => 'cliente@gmail.com',
            'telefone' => '75999321617',
            'password' => bcrypt('secret'),
            $fillable = ['id_funcionario']
        ]);
    }
}
