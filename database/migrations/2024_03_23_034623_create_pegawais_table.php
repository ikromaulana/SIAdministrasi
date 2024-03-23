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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->string("nip",20)->primary();
            $table->string("nama_pegawai",255);
            $table->enum("jenis_kelamin",["Laki-laki","Perempuan"]);
            $table->string("tempat_lahir",100);
            $table->string("agama",15);
            $table->string("alamat",255);
            $table->string("no_telp",15);
            $table->string("umur",50);
            $table->string("ket_masuk_sk",15);
            $table->unsignedBigInteger("kd_unit_kerja");
            $table->foreign("kd_unit_kerja")->references("kd_unit_kerja")->on("unit_kerjas")->onDelete("cascade");
            $table->unsignedBigInteger("kd_jabatan_pegawai");
            $table->foreign("kd_jabatan_pegawai")->references("kd_jabatan_pegawai")->on("jabatan_pegawais")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
