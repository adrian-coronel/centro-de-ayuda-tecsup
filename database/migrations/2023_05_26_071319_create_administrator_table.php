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
        Schema::create('administrator', function (Blueprint $table) {
            $table->id('id_administrator');
            $table->string('name',45);
            $table->string('lastname',45);
            $table->string('second_lastname',45);
            $table->string('email',45)->unique();
            $table->string('position',50);
            $table->string('department',80);
            $table->string('phone_number',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrator');
    }
};
