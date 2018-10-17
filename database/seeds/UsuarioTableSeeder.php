<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'admin',
            'email' => 'adm@admin.com',
            'senha' => bcrypt('admin123'),
            'acesso' => 'administrador'
        ]);
    }
}
