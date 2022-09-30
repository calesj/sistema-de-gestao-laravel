<?php

//Factory é utilizado para a criação de registros aleatorios no banco de dados
//nesse caso utilizaremos na tabela SiteContato

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    //definindo os campos que irão ser criados no registro
    return [
        'nome' => $faker->name,

        //vai criar telefones no banco de dados com a estrutura parecida com a nossa br
        'telefone' => $faker->tollFreePhoneNumber,

        'email' => $faker->unique()->email,

        //vai gerar numeros aleatorios entre 1 e 3
        'motivo_contatos_id' => $faker->numberBetween(1,3),

        'mensagem' => $faker->text(200)
    ];
});
