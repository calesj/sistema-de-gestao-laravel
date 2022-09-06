<?php

//nesse seeder estamos criando 3 objetos cada um com um método de insert diferente

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Metodo 1 inserção de um objeto no banco
        //Istanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        ////Metodo 2 inserção de um objeto no banco
        //Metodo create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'RS',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        //Metodo 3 inserção de um objeto no banco
        //Metodo insert

        DB::table('fornecedores')->insert([
        'nome' => 'Fornecedor300',
        'site' => 'fornecedor300.com.br',
        'uf' => 'SP',
        'email' => 'contato@fornecedor300.com.br'
    ]);
    }
}
