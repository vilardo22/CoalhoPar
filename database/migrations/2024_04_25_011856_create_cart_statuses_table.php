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
        Schema::create('cart_statuses', function (Blueprint $table) {
            $table->id();
            //cart_id string [ref: > carts.uuid]
            $table->foreignId('cart_id')->constrained('carts')->cascadeOnDelete();
            //user_id string [null , ref: - users.uuid]
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('status');//status CartStatuses
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_statuses');
    }
};
