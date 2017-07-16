<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request){
        //$user = new User();
    }
}
