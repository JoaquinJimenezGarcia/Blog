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
}
