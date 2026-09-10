<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tema', function (Blueprint $table) {
            $table->increments('id_tema');
            $table->string('nome', 120);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tema');
    }
};
