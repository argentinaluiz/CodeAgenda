<?php
/**
 * Created by PhpStorm.
 * User: Carlos Eduardoo
 * Date: 10/12/2016
 * Time: 19:22
 */

namespace CodeAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas'; //nome da tabela

    //Todos os campos que a gente pode editar atraves do post ou put e mudar o conteudo do registro
    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    //tabela relacionada com a tabela pessoa
    public function telefones()
    {
        //
    }
}