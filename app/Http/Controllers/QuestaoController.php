<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questao;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Questoes = Questao::all();

        return response()->json($Questoes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $questao = Questao::create($request->all());

        return response()->json($questao, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $questao = Questao::find($id);

        if (!$questao) {
            return response()->json([
                'message'=> 'Questao nao encontrada'
                ],404);
        }
        
            return response()->json($questao,200); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $questao = Questao::find($id);

        if (!$questao) {
            return response()->json([
                'message'=> 'Questao nao encontrada'
                ],404);
        }

        $questao->delete();

        return response()-> noContent();
    }
}
