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
        Schema::create('Staff', function (Blueprint $table) {
            $table->id('id_staff');
            
            $table->unsignedTinyInteger('id_service')->unique();
            $table->foreign('id_service')->references('id_service')->on('service')->onDelete('cascade');

            $table->string('name',45);
            $table->string('lastname',45);
            $table->string('second_lastname',45);
            $table->string('dni',9)->unique();
            $table->string('email',45)->unique();
            $table->string('phone_number',20);
            $table->string('position',80);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Staff');
    }
};
