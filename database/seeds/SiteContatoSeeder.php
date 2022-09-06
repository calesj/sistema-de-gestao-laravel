<?php

//nesse seeder estamos chamado o factory, ou seja, serão criados 100 registros aleatorios
//toda vez que dermos o comando 'php artisan db:seed'

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
        $contato->telefone = '(11) 99999-999';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja Bem vindo! ';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
