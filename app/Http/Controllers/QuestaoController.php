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
        $dados = $request->validate([
            'enunciado' => 'required|string',
            'alternativa_correta' => 'nullable|string|size:1',
            'id_tema' => 'required|integer|exists:tema,id_tema',
        ]);
    
        $questao = Questao::create($dados);
    
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
        $questao = Questao::find($id);

        if (!$questao) {
            return response()->json([
                'message' => 'Questão não encontrada.'
            ], 404);
        }

        $dados = $request->validate([
            'enunciado' => 'sometimes|required|string',
            'alternativa_correta' => 'sometimes|nullable|string|size:1',
            'id_tema' => 'sometimes|required|integer|exists:tema,id_tema',
        ]);

        $questao->update($dados);

        return response()->json($questao, 200);
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
