<?php

use App\MotivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContato::create(['motivo' => 'Dúvida']);
        MotivoContato::create(['motivo' => 'Elogio']);
        MotivoContato::create(['motivo' => 'Reclamação']);
    }
}
