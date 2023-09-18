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
        Schema::create('bilet', function (Blueprint $table) {
            $table->id();
            $table->string("id_user");
            $table->string("id_eveniment");
            $table->date("data_generare");
            $table->string("lista_de_intrari");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilet');
    }
};
