<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
    Schema::create('questao', function (Blueprint $table) {
        $table->increments('id_questao');
        $table->text('enunciado');
        $table->char('alternativa_correta', 1)->nullable();
        $table->unsignedInteger('id_tema');
        $table->timestamps();

        $table->foreign('id_tema')
            ->references('id_tema')
            ->on('tema');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questao');
    }
};
