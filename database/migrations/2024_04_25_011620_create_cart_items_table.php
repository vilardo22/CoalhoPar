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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id(); // Chave primária autoincrementada
            $table->uuid('product_id'); // Chave estrangeira para products.uuid
            $table->foreign('product_id')->references('uuid')->on('products')->onDelete('cascade');
            $table->integer('quantity'); // Coluna para a quantidade de itens
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};