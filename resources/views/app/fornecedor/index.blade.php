<h3>Fornecedor</h3>

@php
    /*if(<condicao>){} //enquanto executa se o retorno for true
*/

/*
    if(isset($variavel)){} //retornar true se a variavel estiver definida
*/
@endphp

{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}
    <br/>
    Status: {{$fornecedores[0]['status']}}
    <br/>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj']}}
    @endisset
@endisset

