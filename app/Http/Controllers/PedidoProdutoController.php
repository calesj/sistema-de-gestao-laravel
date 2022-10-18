<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\PedidoProduto;
use App\Produto;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pedido $pedido)
    {
        $produtos = Produto::all();
        //carregando os produtos do pedido antes de enviar pra view (eager loading)
        //$pedido->produtos;
        return view('app.pedido-produto.create', ['pedido' => $pedido, 'produtos' => $produtos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pedido $pedido)
    {
        $regras = [
            'produto_id' => 'exists:produtos,id',
            'quantidade' => 'required'
        ];

        $feedback = [
            'exists' => 'O produto informado não existe',
            'quantidade.required' => 'O campo :attribute deve possuir um valor válido'
        ];

        $request->validate($regras, $feedback);
        /*
        $pedidoProduto = new PedidoProduto();
        $pedidoProduto->pedido_id = $pedido->id;
        $pedidoProduto->produto_id = $request->get('produto_id');
        $pedidoProduto->quantidade = $request->get('quantidade');
        $pedidoProduto->save();
        */

        //$pedido->produtos //os registros do relacionamento

        //por estarmos fazendo a inseração direto do $pedido, não precisaremos inserir o pedido_id no attach, pois o mesmo já saberá adicionar
        $pedido->produtos()->attach($request->get('produto_id'),
            ['quantidade' => $request->get('quantidade')]);  //objeto que mapeia o relacionamento

        return redirect()->route('pedido-produto.create', ['pedido' => $pedido->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int PedidoProduto $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PedidoProduto $pedidoProduto, $pedido_id)
    {
        //Método delete convencional

       /*PedidoProduto::where([
           'pedido_id' => $pedido->id,
           'produto_id' => $produto->id
       ])->delete();
       */

        //Método delete pelo relacionamento(detach)
        //$pedido->produtos()->detach($produto->id);

        $pedidoProduto->delete();

        return redirect(route('pedido-produto.create', ['pedido' => $pedido_id]));
    }
}
