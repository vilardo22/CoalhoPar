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
            id integer [pk]
  cart_id string [ref: > carts.uuid]
  user_id string [null , ref: - users.uuid]
  status CartStatuses
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
