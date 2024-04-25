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
        Schema::create('customer_telephones', function (Blueprint $table) {
            $table->id(); // Chave primária autoincrementada
            $table->uuid('customer_id'); // Chave estrangeira para customers.uuid
            $table->foreign('customer_id')->references('uuid')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('telephone_id'); // Chave estrangeira para telephones.id
            $table->foreign('telephone_id')->references('id')->on('telephones')->onDelete('cascade');
            $table->tinyInteger('main')->default(false); // Coluna 'main' com valor padrão falso
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_telephones');
    }
};
