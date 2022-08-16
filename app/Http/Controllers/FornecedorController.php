<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
                0 => [
                    'nome' => 'Fornecedor 1',
                    'status' => 'N',
                    'cnpj' => '',
                    'ddd' => '11', //São Paulo (SP)
                    'telefone' => '0000-0000'
                ],
                1 => [
                    'nome' => 'Fornecedor 2',
                    'status' => 'S',
                    'cnpj' => '123',
                    'ddd' => '32', //Fortaleza (CE)
                    'telefone' => '0000-0000'
                ],
                2 => [
                    'nome' => 'Fornecedor 3',
                    'status' => 'S',
                    'cnpj' => '123',
                    'ddd' => '21', //Rio de Jnaiero(RJ)
                    'telefone' => '0000-0000'
                ],
                3 => [
                    'nome' => 'Fornecedor 4',
                    'status' => 'S',
                    'cnpj' => '123',
                    'ddd' => '85', //Pernambuco(PE)
                    'telefone' => '0000-0000'
                ]

            ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
