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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('level_id');
            $table->string('tag_id');
            $table->string('slug');
            $table->string('course_title');
            $table->integer('language_id');
            $table->string('short_desp')->nullable();
            $table->longText('long_desp');
            $table->string('course_time');
            $table->string('total_lecture');
            $table->integer('course_price');
            $table->integer('discount')->nullable();
            $table->integer('discount_price')->nullable();
            $table->string('preview');
            $table->integer('instructor_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
