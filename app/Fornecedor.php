<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores'; // para acertar o plural, ele espera que a tabela chame 'fornecedors'
    protected $fillable = ['nome', 'site', 'uf', 'email']; // para poder colocar registro de forma '::create'
}
