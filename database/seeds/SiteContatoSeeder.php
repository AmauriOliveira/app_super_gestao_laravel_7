<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteContato::create([
            'nome' => 'Sistema',
            'telefone' => '(16) 99999-9999',
            'email' => 'sistema@sistema.com',
            'motivo' => 1,
            'mensagem' => 'Carregando sistema com seeds'
        ])->save();

        SiteContato::create([
            'nome' => 'Carregando',
            'telefone' => '(16) 11111-1111',
            'email' => 'load@sistema.com',
            'motivo' => 1,
            'mensagem' => 'Carregando o mock'
        ])->save();
    }
}
