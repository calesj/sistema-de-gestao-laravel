<!-- Se existir o cliente $id, ele chamará a função update do controller -->
@if(isset($cliente->id))
    <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
        @csrf
        @method('PUT')
        @else
            <!-- //se não existir id, ele chamará a função store, criando um novo -->
            <form method="post" action="{{ route('cliente.store') }}">
                @csrf
                @endif

                <input type="text" name="nome" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome"
                       class="borda-preta">
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                <button type="submit" class="borda-preta">Cadastrar</button>
            </form>
