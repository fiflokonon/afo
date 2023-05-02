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
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mortalite')->nullable();
            $table->boolean('avec_mortalite')->default(0);
            $table->string('cause_mortalite')->nullable();
            $table->string('commentaire')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('generation_id');
            $table->bigInteger('poids_moyen')->nullable();
            $table->boolean('statut')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapports');
    }
};
