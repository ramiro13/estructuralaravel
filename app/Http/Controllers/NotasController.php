<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index(){
        return view('notas.todas.index',['notas' => Notas::all()->where('user_id',auth()->id())]);
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

    public function edit($id){
        return view('notas.todas.edit',['nota'=>Notas::findOrFail($id)]);
    }

    public function update (Request $request,$id){
        $nota=Notas::findORFail($id);

        $nota->titulo = request('titulo');
        $nota->texto = request('texto');

        $nota->update();
    }
}
