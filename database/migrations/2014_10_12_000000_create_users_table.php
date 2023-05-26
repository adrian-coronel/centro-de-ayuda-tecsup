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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('code',6)->unique();
            $table->string('password');
            $table->string('name',45);
            $table->string('lastname',45);
            $table->string('second_lastname',45);
            $table->string('email',45)->unique();
            $table->string('phone_number',20);
            $table->date('date_of_birth');
            $table->tinyInteger('state')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
