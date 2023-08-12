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
        Schema::create('who_am_i_sub_category', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->text('description')->nullable();
            $table->string('slug');
            $table->boolean('status');
            $table->integer('who_am_i_page_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('who_am_i_sub_category');
    }
};
