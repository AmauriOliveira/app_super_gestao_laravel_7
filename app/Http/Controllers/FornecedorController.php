<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function Index()
    {
        $fornecedores = [
            0 => ['nome' => "Amauri Oliveira", "status" => "S"],
        ];
        return view("app.fornecedor.index", compact('fornecedores'));
    }
}
