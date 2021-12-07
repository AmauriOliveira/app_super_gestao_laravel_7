{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $class_border_input }}">
    @if ($errors->has('nome'))
        <div class="error">
            {{ $errors->first('nome') }}
        </div>
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone"
        class="{{ $class_border_input }}">
    @if ($errors->has('telefone'))
        <div class="error">
            {{ $errors->first('telefone') }}
        </div>
    @endif
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail"
        class="{{ $class_border_input }}">
    @if ($errors->has('email'))
        <div class="error">
            {{ $errors->first('email') }}
        </div>
    @endif
    <br>
    <select name="motivo_contatos_id" class="{{ $class_border_input }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $value)
            <option value="{{ $value->id }}" {{ old('motivo_contatos_id') == $value->id ? 'selected' : '' }}>
                {{ $value->motivo }}
            </option>
        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        <div class="error">
            {{ $errors->first('motivo_contatos_id') }}
        </div>
    @endif
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem"
        class="{{ $class_border_input }}">{{ old('mensagem') != '' ? old('mensagem') : '' }}</textarea>
    @if ($errors->has('mensagem'))
        <div class="error">
            {{ $errors->first('mensagem') }}
        </div>
    @endif
    <br>
    <button type="submit" class="{{ $class_border_input }} {{ $class_button_color }}">ENVIAR</button>
</form>
{{--
@if ($errors->any())
    <div class="error">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif
--}}
