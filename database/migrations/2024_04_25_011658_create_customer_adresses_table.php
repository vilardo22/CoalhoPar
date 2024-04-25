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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id(); // Chave primária autoincrementada
            $table->uuid('customer_id'); // Chave estrangeira para customers.uuid
            $table->foreign('customer_id')->references('uuid')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('address_id'); // Chave estrangeira para addresses.id
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->string('name')->nullable(); // Coluna 'name' permitindo valores nulos
            $table->timestamps(); // Colunas created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_addresses');
    }
};

