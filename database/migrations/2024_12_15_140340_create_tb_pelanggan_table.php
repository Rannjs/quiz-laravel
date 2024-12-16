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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->integer('pel_gol_id')->unsigned(); // Ganti dengan pel_gol_id
            $table->integer('pel_user_id')->unsigned(); // Ganti dengan pel_user_id
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->text('pel_alamat');
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50); 
            $table->string('pel_seri', 50);
            $table->integer('pel_meteran')->unsigned();
            $table->enum('pel_aktif', ['Y', 'N'])->default('Y');
            $table->timestamps();
        });

        // Menambahkan foreign key constraints
        Schema::table('tb_pelanggan', function (Blueprint $table) {
            $table->foreign('pel_gol_id')->references('gol_id')->on('tb_golongan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pel_user_id')->references('user_id')->on('tb_users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};