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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 15, 2)->default(0);
            $table->unsignedInteger('guests_id');
            $table->unsignedInteger('room_id');
            $table->date('date')->nullable();
            $table->string('registered_by', 255)->nullable();
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('status')->default(0);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('guests_id')
            ->references('id')->on('guests')
            ->onDelete('restrict')
            ->onUpdate('cascade');

            $table->foreign('room_id')
                ->references('id')->on('rooms')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
