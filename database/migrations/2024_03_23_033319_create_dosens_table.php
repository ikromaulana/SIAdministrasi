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
        Schema::create('dosens', function (Blueprint $table) {
            $table->string("nidn",20)->primary();
            $table->string("nip",20);
            $table->string("nama_dosen",255);
            $table->enum("jenis_kelamin",["Laki-laki","Perempuan"]);
            $table->string("tempat_lahir",100);
            $table->string("agama",15);
            $table->string("alamat",255);
            $table->string("no_telp",15);
            $table->string("gelar_depan",15);
            $table->string("gelar_belakang",15);
            $table->string("email_pribadi",100);
            $table->string("email_kampus",100);
            $table->unsignedBigInteger("kd_homebase");
            $table->foreign("kd_homebase")->references("kd_homebase")->on("homebases")->onDelete("cascade");
            $table->unsignedBigInteger("kd_jabatan_dosen");
            $table->foreign("kd_jabatan_dosen")->references("kd_jabatan_dosen")->on("jabatan_dosens")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
