<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller{
    public function index(){

        $usuarios = User::paginate(5);
        
        return view('/panel/usuarios.index', compact('usuarios'));
    }

    public function create() {
        //
    }

    public function store(Request $request){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        //
    }
    
}
