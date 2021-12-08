@extends('site.layouts.basico')
@section('titulo', 'Login')
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>
        <div style="width:30%; margin: 0 auto;">
            <form action={{ route('site.login') }} method="post">
                @csrf
                <input name="usuario" value="{{ @old('usuario') }}" type="text" placeholder="Usuário"
                    class="borda-preta">
                @if ($errors->has('usuario'))
                    <div class="error">
                        {{ $errors->first('usuario') }}
                    </div>
                @endif
                <input name="senha" value="{{ @old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
                @if ($errors->has('senha'))
                    <div class="error">
                        {{ $errors->first('senha') }}
                    </div>
                @endif
                <button type="submit" class="green-button borda-preta">Login</button>
            </form>
            @if (isset($erro) && $erro != '')
                <div class="error">
                    {{ $erro }}
                </div>
            @endif
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
