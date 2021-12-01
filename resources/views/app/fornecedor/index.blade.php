@php
// comentario com php puro
@endphp

{{-- If elseif else --}}
{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h2>Existe alguns fornecedores</h2>
@elseif (count($fornecedores) > 10)
    <h2>Existe muitos fornecedores</h2>
@else
    <h2>Não existe fornecedores</h2>
@endif

@if ($fornecedores[0]['status'] == 'N')
    <h2>Fornecedor Inativo</h2>
@endif --}}

{{-- Unless --}}
{{-- @unless($fornecedores[0]['status'] == 'N')
    <h2>Fornecedor Ativo</h2>
@endunless --}}

{{-- Isset --}}
@isset($fornecedores)
    <h2>{{ $fornecedores[0]['nome'] }}</h2>
@endisset

{{-- Empty --}}
@empty($fornecedores[0]['cidade'])
    <h3>Cidade está vazia</h3>
@endempty

{{-- @dd($fornecedores) --}}
