{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $class_border_input }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone"
        class="{{ $class_border_input }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail"
        class="{{ $class_border_input }}">
    <br>
    <select name="motivo" class="{{ $class_border_input }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $value)
            <option value="{{ $value->id }}" {{ old('motivo') == $value->id ? 'selected' : '' }}>
                {{ $value->motivo }}
            </option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem"
        class="{{ $class_border_input }}">{{ old('mensagem') != '' ? old('mensagem') : '' }}</textarea>
    <br>
    <button type="submit" class="{{ $class_border_input }} {{ $class_button_color }}">ENVIAR</button>
</form>
