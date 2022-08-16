<h3>
    Fornecedor
</h3>
@php $i = 0 @endphp
    @forelse( $fornecedores as $fornecedor )
        Iteração : {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'nenhum dado foi dado'}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] }}
        @if($loop->first)
            primeira interação do loop
        @endif
        @if($loop->last)
            ultima interação do loop
            {{ $loop->count }}
        @endif
        <hr>
        <br>

            @switch($fornecedor['ddd'])
                @case('11')
                São Paulo - SP
                @break

                @case('32')
                Juiz de Fora - MG
                @break

                @case('21')
                Rio de Janeiro - RJ
                @break

                @default
                Estado não identificado
            @endswitch
        <br><br>
            @php $i++ @endphp
    @empty
        não existe fornecedores
    @endforelse

