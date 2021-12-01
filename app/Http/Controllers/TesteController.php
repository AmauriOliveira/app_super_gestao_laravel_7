<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $params1, int $params2)
    {
        //  echo "A soma é " . ($params1 + $params2);
        // return view('site.teste', ['params1' => $params1, 'params2' => $params2]); // array associativo
        // return view('site.teste', compact('params1',  'params2')); // compact
        return view('site.teste')->with('params1', $params1)->with('params2', $params2); //with
    }
}
