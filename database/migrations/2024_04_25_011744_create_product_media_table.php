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
        Schema::create('product_media', function (Blueprint $table) {
            $table->id(); // Chave primária autoincrementada
            $table->uuid('product_id'); // Chave estrangeira para products.uuid
            $table->foreign('product_id')->references('uuid')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('product_media');
    }
};

