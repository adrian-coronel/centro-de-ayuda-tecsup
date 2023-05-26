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
        Schema::create('incident', function (Blueprint $table) {
            $table->id('id_incident');

            //onDelete(cascade) => Indica que cuando se elimina un usuario, las filas relacionadas también se eliminarán en cascada.
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');

            $table->unsignedTinyInteger('id_service');
            $table->foreign('id_service')->references('id_service')->on('service')->onDelete('cascade');
            $table->string('subject',60);
            $table->date('date');
            $table->time('hour');
            $table->string('grade',45);
            $table->string('impact',60);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incident');
    }
};
