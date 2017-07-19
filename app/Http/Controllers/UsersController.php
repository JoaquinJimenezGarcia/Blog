<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller{
    public function index(){
        $users = User::orderBy('id', 'ASC')->paginate(5);

        return view('admin.users.index')->with('users', $users);
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(UserRequest $request){
        $user = new User( $request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        flash("Se ha registrado " . $user->name . " de forma exitosa.")->success();

        return redirect()->route('users.index');
    }

    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        flash("Usuario  " . $user->name . " ha sido borrado con éxito")->warning();

        return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::find($id);

        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;

        $user->save();

        flash("Se ha editado el usuario " . $user->name . " con éxito")->warning();
        return redirect()->route('users.index');
    }
}
