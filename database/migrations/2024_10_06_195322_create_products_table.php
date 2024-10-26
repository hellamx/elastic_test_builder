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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('sku');
            $table->integer('param_1')->nullable();
            $table->integer('param_2')->nullable();
            $table->integer('param_3')->nullable();
            $table->integer('param_4')->nullable();
            $table->integer('param_5')->nullable();
            $table->integer('param_6')->nullable();
            $table->integer('param_7')->nullable();
            $table->integer('param_8')->nullable();
            $table->integer('param_9')->nullable();
            $table->integer('param_10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
