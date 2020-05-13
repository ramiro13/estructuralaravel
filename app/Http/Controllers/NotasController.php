<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index(){
        return view('notas.todas.index',['notas' => Notas::all()]);
    }

    public function store(){
        $nota = new Notas();

        $nota->titulo = request('titulo');
        $nota->texto = request('texto');
        $nota->user_id = auth()->id();

        $nota->save();

        return redirect('notas/todas');
    }

    public function favoritas(){
        return view('notas.favoritas');
    }

    public function archivadas(){
        return view('notas.archivadas');
    }
}
