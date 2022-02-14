<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('users.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar la petición

        //dd($request->all());

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);

        $usuario->save();

        $usuario->syncRoles($request->roles);

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //contraseña webhost
        //w7TxoeAc6i)6nXF1Vca)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        $roles = Role::all();
        return view('users.edit',compact('usuario','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'password'=>'required_if:cambiar_pass,si'
        ]);
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        if($request->has('cambiar_pass')){
            $usuario->password = Hash::make($validated['password']);
        }

        if($request->hasFile('foto')){
            Storage::delete($usuario->foto);
            $ruta = $request->file('foto')->store('');
            $usuario->foto = $ruta;
        }

        $usuario->syncRoles($request->roles);
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        Storage::delete($usuario->foto);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
