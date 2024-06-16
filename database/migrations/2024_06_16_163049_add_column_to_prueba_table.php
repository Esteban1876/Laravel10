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
        Schema::table('prueba', function (Blueprint $table) {
            $table->boolean('aprobada')->nullable();
            $table->string('nombre', 100)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prueba', function (Blueprint $table) {
            $table->dropColumn('aprobada');
            $table->string('nombre', 250)->change();
        });
    }
};
