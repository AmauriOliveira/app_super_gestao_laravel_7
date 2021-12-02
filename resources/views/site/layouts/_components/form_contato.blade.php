{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $class_border_input }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $class_border_input }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $class_border_input }}">
    <br>
    <select name="motivo" class="{{ $class_border_input }}">
        <option value="0">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" placeholder="Preencha aqui a sua mensagem" class="{{ $class_border_input }}"></textarea>
    <br>
    <button type="submit" class="{{ $class_border_input }} {{ $class_button_color }}">ENVIAR</button>
</form>
