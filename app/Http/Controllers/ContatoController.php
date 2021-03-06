<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $req)
    {
        /* Forma 1
        $siteContato = new SiteContato();

        $siteContato->nome = $req->input('nome');
        $siteContato->telefone = $req->input('telefone');
        $siteContato->email = $req->input('email');
        $siteContato->motivo = $req->input('motivo');
        $siteContato->mensagem = $req->input('mensagem');

        $siteContato->save();
        */

        /*  Forma 2
        SiteContato::Create([
            'nome' => $req->input('nome'),
            'telefone' => $req->input('telefone'),
            'email' => $req->input('email'),
            'motivo' => $req->input('motivo'),
            'mensagem' => $req->input('mensagem'),
        ])->save();
        */

        /* Forma 3
        $siteContato = new SiteContato();
        $siteContato->fill($req->all());
        $siteContato->save();
        */

        /* Forma 4
        $siteContato = new SiteContato();
        $siteContato->create($req->all());
        $siteContato->save();
        */

        /* Forma 5
        SiteContato::Create($req->all())->save();
        */

        $motivos = $motivos = MotivoContato::all();

        return view("site.contato", ['motivos' => $motivos]);
    }

    public function salvar(Request $req)
    {
        $req->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email|unique:site_contatos', // o unique é apenas um exemplo
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ], [
            'nome.min' => 'O campo nome deve ter no minimo 3 caracteres.',
            'nome.max' => 'O campo nome deve ter no maximo 40 caracteres.',
            'email.email' => 'O campo e-mail deve ser um valido.',
            'email.unique' => 'O campo e-mail já está em uso.',
            'mensagem.max' => 'O campo mensagem deve ter no maximo 2000 caracteres.',
            // genéricos
            'required' => 'O campo :attribute é requerido.',

        ]);

        SiteContato::Create($req->all())->save();
        return redirect()->route('site.index');
    }
}
