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
        Schema::create('customer_media', function (Blueprint $table) {
            $table->id(); // Chave primária autoincrementada
            $table->uuid('customer_id'); // Chave estrangeira para customers.uuid
            $table->foreign('customer_id')->references('uuid')->on('customers')->onDelete('cascade');
            $table->uuid('media_id'); // Chave estrangeira para medias.uuid
            $table->foreign('media_id')->references('uuid')->on('medias')->onDelete('cascade');
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_media');
    }
};

