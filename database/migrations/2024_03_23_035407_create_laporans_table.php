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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id("kd_laporan");
            $table->string("nidn",20);
            $table->string("nip",20);
            $table->string("berkas");
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
        Schema::dropIfExists('laporans');
    }
};
