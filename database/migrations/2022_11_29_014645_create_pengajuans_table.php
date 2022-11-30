<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peserta');
            $table->string('email')->unique();
            $table->string('isntansi');
            $table->enum('jenis_kelamin',['laki-laki', 'perempuan']);
            $table->string('jurusan');
            $table->string('semester');
            $table->string('alamat');
            $table->string('no_hp')->unique();
            $table->string('cv_datadiri');
            $table->string('surat_pengantar');
            $table->enum('status',['pending','terima','tolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuans');
    }
};
