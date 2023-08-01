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
            $table->increments('id');
            $table->bigInteger('nip')->unique();
            $table->text('nama');
            $table->string('pangkat');
            $table->text('jabatan');
            $table->timestamps();
        });

        Schema::create('pegawai_sppd', function (Blueprint $table) {
            // $table->bigInteger('pegawai_id')->unsigned();
            // $table->bigInteger('sppd_id')->unsigned();

            // $table->primary(['pegawai_id', 'sppd_id']);

            $table->foreignId('pegawai_id')->onDelete('cascade');
            $table->foreignId('sppd_id')->onDelete('cascade');
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
