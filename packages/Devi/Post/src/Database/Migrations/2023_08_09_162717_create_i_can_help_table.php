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
        Schema::create('i_can_help', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('help')->nullable();
            $table->boolean('urgent')->nullable();
            $table->boolean('nonUrgent')->nullable();
            $table->boolean('other')->nullable();
            $table->string('categoryValue')->nullable();
            $table->text('loaction')->nullable();
            $table->boolean('country')->nullable();
            $table->boolean('state')->nullable();
            $table->boolean('zipcode')->nullable();
            $table->boolean('town')->nullable();
            $table->string('schedule')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('i_can_help');
    }
};
