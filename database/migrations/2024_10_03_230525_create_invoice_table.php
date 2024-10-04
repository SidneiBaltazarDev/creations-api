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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->float('valor')->default(0);
            $table->unsignedBigInteger('endereco_id')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('SET NULL');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
