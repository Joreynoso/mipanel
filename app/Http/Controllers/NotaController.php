<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use App\Nota;

class NotaController extends Controller{

    public function index(){

        $notas = Nota::sinterminar()->orderBy('created_at', 'DESC')->paginate(8);

        return view('/panel/notas.index', compact('notas'));
        
    }

    public function archivo(){

        $notas_archivadas = Nota::terminado()->paginate(8);

        return view('/panel/notas.archivo', compact('notas_archivadas'));
    }

    public function store(Request $request){

        $validator = \Validator::make($request->all(), [
            'descripcion' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $nuevaNota = new Nota;
        $nuevaNota->descripcion = $request->input('descripcion');
        $nuevaNota->urgencia = "baja";
        $nuevaNota->save();

        return response()->json(['success'=>'Data is successfully added']);
    }

    public function show($id){
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
