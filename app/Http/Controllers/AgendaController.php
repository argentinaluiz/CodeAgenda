<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;

class AgendaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::where('apelido', 'like', 'A%')->get();
        return view('agenda', compact('pessoas'));
    }
}
