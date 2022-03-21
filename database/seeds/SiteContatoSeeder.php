<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '(54) 997104713';
        $contato->email = '182740@upf.br';
        $contato->motivo_contato = '2';
        $contato->mensagem = 'O sistema é muito bom';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }

}
