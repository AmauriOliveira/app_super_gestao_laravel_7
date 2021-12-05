<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Essa forma requer o fillable configurado;
        Fornecedor::create([
            'nome' => 'Mattel Inc',
            'site' => 'www.mattel.com',
            'uf' => 'SP',
            'email' => 'sac@mattel.com'
        ])->save();

        Fornecedor::create([
            'nome' => 'Lollipop candies',
            'site' => 'www.lollipopcandies.com',
            'uf' => 'RJ',
            'email' => 'sac@lollipopcandies.com'
        ])->save();

        Fornecedor::create([
            'nome' => 'ACME Inc',
            'site' => 'www.acme.com',
            'uf' => 'MG',
            'email' => 'sac@acme.com'
        ])->save();
// essa forma não escreve created_at e updated_at;
        DB::table('fornecedores')->insert([
            'nome' => 'Glory',
            'site' => 'www.glory.com',
            'uf' => 'PR',
            'email' => 'sac@glory.com'
        ]);
    }
}
