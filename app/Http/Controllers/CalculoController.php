<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Calculo;
use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){

        $dadosValidados = $request->validate([
            'exercicio'=> 'required',
            'serie'=> 'required',
            'repeticao'=> 'required',
            'carga'=> 'required'
        ]);

        $calculo = Calculo::create($dadosValidados);

        return redirect()->route('calcular.exibir', ['id'=> $calculo->id]);
    }

    public function show($id){
        $calculo = Calculo::find($id);

        if(!$calculo){
            return response()->json(["mesage"=> 'Dados não encontrado'], 404);
        }

        $resultado = $calculo->serie * $calculo->repeticao * $calculo->carga;

        return view('show', ['calculo' => $calculo, 'resultado'=> $resultado]);
        
    }
}
