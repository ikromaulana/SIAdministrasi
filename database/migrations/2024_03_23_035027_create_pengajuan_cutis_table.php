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
        Schema::create('pengajuan_cutis', function (Blueprint $table) {
            $table->id("kd_cuti");
            $table->string("nidn",20);
            $table->string("nip",20);
            $table->date("tgl_awal_cuti");
            $table->date("tgl_akhir_cuti");
            $table->string("ket_cuti",255);
            $table->foreign("nidn")->references("nidn")->on("dosens")->onDelete("cascade");
            $table->foreign("nip")->references("nip")->on("pegawais")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_cutis');
    }
};
