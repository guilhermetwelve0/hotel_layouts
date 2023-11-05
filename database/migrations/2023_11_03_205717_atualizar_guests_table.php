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
        Schema::table('guests', function (Blueprint $table) {
            $table->string('emergency_phone', 14)->nullable(true)->change();
            $table->string('neighborhood', 20)->nullable(true)->change();
            $table->integer('registered_by')->unsigned()->nullable(true)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('phone', 20)->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
