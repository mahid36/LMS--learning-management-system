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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->integer('student_id');
            $table->integer('total');
            $table->integer('discount');
            $table->integer('payment_method');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('country');
            $table->string('city');
            $table->string('postal_code');
            $table->string('address');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
