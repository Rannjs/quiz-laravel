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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id'); // Ubah menjadi user_id
            $table->string('user_nama', 50);
            $table->string('user_email', 100);
            $table->string('user_pass', 100);
            $table->string('user_alamat', 250);
            $table->string('user_hp', 25);
            $table->string('user_pos', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};