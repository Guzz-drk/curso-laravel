<h3>Fornecedor</h3>

@php
    /*if(<condicao>){} //enquanto executa se o retorno for true
*/

/*
    if(isset($variavel)){} //retornar true se a variavel estiver definida

    if(empty($variavel)){} //retornar true se a variavel estiver vazia
    Vazia={
        - ''
        -  0
        - '0'
        - null
        - false
        - array{}
        - $var
    }

*/
@endphp

{{-- @unless executa se o retorno for false --}}
{{--$loop Disponivel apenas para foreach e forelse--}}
@isset($fornecedores)
    {{-- @foreach--}}
    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{$loop->iteration}}
        <br/>
            {{--@php $i = 0 @endphp
            @while(isset($fornecedores[$i])) --}}
                {{--@for($i =0; isset($fornecedores[$i]); $i++)--}}
                    Fornecedor: {{$fornecedor['nome']}}
                    <br/>
                    Status: {{$fornecedor['status']}}
                    <br/>
                    CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não Informado'}}
                    <!-- 
                        $variavel testada não estiver definida (isset)
                        ou
                        $varaivel testada possuir o valor null 
                    -->
                    <br/>
                    Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
                    @switch($fornecedor['ddd'])
                        @case('11')
                            São Paulo - SP
                            @break
                        @case('85')
                            Fortaleza - CE
                            @break
                        @case('32')
                            Juiz de Fora - MG
                            @break
                        @default
                            Estado não identificado
                    @endswitch
                {{--@endfor--}}
                    <br/>
                    @if ($loop->first)
                        Primeira Iteração do loop
                        <br>
                        Total de registros: {{$loop->count}}
                    @endif
                    @if ($loop->last)
                        Última Iteração do loop
                    @endif
                <hr>
            @empty
                Não existem fornecedores cadastrados
            {{--@php $i++ @endphp
            @endwhile--}}
    @endforelse
    {{-- @endforeach--}}
@endisset

