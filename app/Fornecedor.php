<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;

    protected $table = 'fornecedores'; // para acertar o plural, ele espera que a tabela chame 'fornecedors'
    protected $fillable = ['nome', 'site', 'uf', 'email']; // para poder colocar registro de forma '::create'
}
