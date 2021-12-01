<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function Index()
    {
        return view("app.fornecedor.index");
    }
}
