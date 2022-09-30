@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Editar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ //enviando o produto, e as unidades para o componente e printando ele aqui na tela }}
                @component('app.produto._components.form_create_edit', ['produto' => $produto, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>

    </div>

@endsection

