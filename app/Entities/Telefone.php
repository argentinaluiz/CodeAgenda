<?php
/**
 * Created by PhpStorm.
 * User: Carlos Eduardoo
 * Date: 10/12/2016
 * Time: 19:24
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones'; //nome da tabela

    protected $fillable = [
        'descricao',
        'codePais',
        'ddd',
        'prefixo',
        'sufixo'
    ];
}