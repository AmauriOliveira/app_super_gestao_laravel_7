{{-- Aqui vai um comentário descartado pelo Blade --}}

@php
// comentario com php puro
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h2>Existe alguns fornecedores</h2>
@elseif (count($fornecedores) > 10)
    <h2>Existe muitos fornecedores</h2>
@else
    <h2>Não existe fornecedores</h2>
@endif

{{-- @dd($fornecedores) --}}
