<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function index(Request $request)
    {
        if($request){

            $query = trim($request->get('search'));

            $users = User::where('name','LIKE','%'.$query.'%')
            ->orderBy('id','asc')
            ->paginate(5);

            return view('usuarios.index', ['users' => $users,'search'=>$query]);
        }


        //$users = User::all();
        //return view('usuarios.index', ['users' => $users]);
    }


    public function create()
    {
        //
        return view('usuarios.create');
    }


    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = Hash::make(request('password'));

        $usuario->save();

        return redirect('/usuarios');
    }

    public function show($id)
    {
        return view ('usuarios.show',['user'=>User::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view ('usuarios.edit',['user'=>User::findOrFail($id)]);
    }


    public function update(UserFormRequest $request, $id)
    {

        $usuario = User::findOrFail($id);

        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');

        $usuario->update();

        return redirect('/usuarios');
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);

        $usuario->delete();

        return redirect('/usuarios');
    }
}
