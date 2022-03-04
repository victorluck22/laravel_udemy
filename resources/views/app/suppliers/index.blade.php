<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suppliers</title>
</head>
<body>
    <h3>Suppliers Page</h3>


    @php

    @endphp
    @isset($suppliers)
        @forelse ($suppliers as $supplier)
            Iteração atual: {{ $loop->iteration }}
            <br>
            Fornecedor: {{ $supplier['nome'] }}
            <br>
            Status: {{ $supplier['status'] == 'S' ? 'ATIVO' : 'BLOQUEADO' }}
            <br>
            CNPJ: {{ $supplier['cnpj'] ?? 'SEM CNPJ'}}
            <br>
            Telefone ({{ $supplier['ddd'] ?? '' }}) {{ $supplier['telefone'] ?? '' }}
            <br>
            @switch($supplier['ddd'])
                @case('11')
                    São Paulo - SP
                    @break
                @case('21')
                    Rio De Janeiro - RJ
                @break
                @case('24')
                    Volta redonda - RJ
                @break
                @default
                    Não Reconhecido
            @endswitch
            <br>
            @if($loop->first)
                Primeira linha
            @endif
            @if($loop->last)
                Última linha
                <br>
                Total de registros: {{ $loop->count }}
            @endif

            <hr>
        @empty
            Nenhum item retornado!!!
        @endforelse

    @endisset




    @unless ($suppliers[0]['status'] == 'S')
        <h3>Fornecedor Inativo</h3>
    @endunless



</body>
</html>
