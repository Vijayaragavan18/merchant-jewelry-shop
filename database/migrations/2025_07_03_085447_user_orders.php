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
        Schema::create('user_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wishlist_id')->nullable();
            $table->string('Client_name')->nullable();

            $table->string('orderUser');
            $table->string('orderQty');
            $table->string('OrderPrice');
            $table->string('Description');
            $table->string('Gender');
            $table->string('Material');
            $table->string('TypeOfJewel');
            $table->string('finalPrice');
            $table->string('image')->nullable();
            $table->string('OrderRequest');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('wishlist_id')->references('user_id')->on('wishlists')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_orders');
    }
};
