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
        Schema::create('activitats', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('descripcio');
            $table->foreignId('programacion_id')->constrained();
            $table->foreignId('uf_id')->constrained();
            $table->foreignId('ra_ids')->constrained();
            $table->foreignId('criteri_ids')->constrained();
            $table->foreignId('contingut_ids')->constrained();
            $table->timestamps();
        });
        Schema::create('activitat_ra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activitat_id')->constrained();
            $table->foreignId('ra_id')->constrained();
            $table->timestamps();
        });
        Schema::create('activitat_criteri', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activitat_id')->constrained();
            $table->foreignId('criteri_id')->constrained();
            $table->timestamps();
        });
        Schema::create('activitat_contingut', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activitat_id')->constrained();
            $table->foreignId('contingut_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activitat_ra');
        Schema::dropIfExists('activitat_criteri');
        Schema::dropIfExists('activitat_contingut');
        Schema::dropIfExists('activitats');
    }
};
