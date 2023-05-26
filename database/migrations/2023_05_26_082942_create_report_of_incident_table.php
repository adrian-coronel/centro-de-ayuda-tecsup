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
        Schema::create('Report', function (Blueprint $table) {
            $table->id('id_report');
            
            $table->unsignedBigInteger('id_incident')->unique();
            $table->foreign('id_incident')->references('id_incident')->on('incident')->onDelete('cascade');

            $table->unsignedBigInteger('id_user')->unique();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('id_administrator')->unique();
            $table->foreign('id_administrator')->references('id_administrator')->on('administrator')->onDelete('cascade');

            $table->unsignedTinyInteger('id_service')->unique();
            $table->foreign('id_service')->references('id_service')->on('service')->onDelete('cascade');

            $table->string('title', 80);
            $table->string('creation_date');
            $table->string('description');
            $table->tinyInteger('state')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Report');
    }
};
