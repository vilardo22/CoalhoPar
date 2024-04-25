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
        Schema::create('user_telephones', function (Blueprint $table) {
            $table->id(); // Chave primária autoincrementada
            $table->uuid('user_id'); // Chave estrangeira para users.uuid
            $table->foreign('user_id')->references('uuid')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('telephone_id'); // Chave estrangeira para telephones.id
            $table->foreign('telephone_id')->references('id')->on('telephones')->onDelete('cascade');
            $table->tinyInteger('main')->default(false); // Coluna 'main' com valor padrão falso
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_telephones');
    }
};
