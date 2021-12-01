@php
// comentario com php puro
@endphp

{{-- If elseif else --}}
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h2>Existe alguns fornecedores</h2>
@elseif (count($fornecedores) > 10)
    <h2>Existe muitos fornecedores</h2>
@else
    <h2>Não existe fornecedores</h2>
@endif

@if ($fornecedores[0]['status'] == 'N')
    <h2>Fornecedor Inativo</h2>
@endif

{{-- Unless --}}


@unless($fornecedores[0]['status'] == 'N')
    <h2>Fornecedor Ativo</h2>
@endunless

@dd($fornecedores)
