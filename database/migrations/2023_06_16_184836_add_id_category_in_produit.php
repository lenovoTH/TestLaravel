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
        Schema::table('produit', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('idCat');
            $table->foreign('idCat')->references('idC')->on('categorie');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produit', function (Blueprint $table) {
            //
        });
    }
};
