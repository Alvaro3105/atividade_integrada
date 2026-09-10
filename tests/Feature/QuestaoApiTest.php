<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class QuestaoApiTest extends TestCase
{
    use RefreshDatabase;

    private function criarTema(): void
    {
        DB::table('tema')->insert([
            'id_tema' => 1,
            'nome' => 'Matemática Básica',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function test_crud_de_questoes(): void
    {
        $this->criarTema();

        $create = $this->postJson('/api/questoes', [
            'enunciado' => 'Quanto é 2 + 2?',
            'alternativa_correta' => 'A',
            'id_tema' => 1,
        ]);

        $create
            ->assertCreated()
            ->assertJsonPath('enunciado', 'Quanto é 2 + 2?')
            ->assertJsonPath('id_tema', 1);

        $id = $create->json('id_questao');

        $this->getJson("/api/questoes/{$id}")
            ->assertOk()
            ->assertJsonPath('id_questao', $id);

        $this->patchJson("/api/questoes/{$id}", [
            'enunciado' => 'Quanto é 3 + 3?',
        ])
            ->assertOk()
            ->assertJsonPath('enunciado', 'Quanto é 3 + 3?');

        $this->deleteJson("/api/questoes/{$id}")
            ->assertNoContent();

        $this->getJson("/api/questoes/{$id}")
            ->assertNotFound();
    }

    public function test_rejeita_tema_inexistente(): void
    {
        $this->postJson('/api/questoes', [
            'enunciado' => 'Questão inválida',
            'alternativa_correta' => 'B',
            'id_tema' => 999,
        ])->assertUnprocessable();
    }
}
