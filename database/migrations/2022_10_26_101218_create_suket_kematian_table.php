<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuketKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suket_kematian', function (Blueprint $table) {
            $table->id();
            $table->string('no_medrek');
            $table->string('no_surat');
            $table->string('nama');
            $table->string('umur');
            $table->string('alamat_tinggal');
            $table->string('alamat_ktp');
            $table->string('no_alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota_kab');
            $table->string('kode_pos');
            $table->string('telepon_hp');
            $table->string('pekerjaan');
            $table->string('nama_ayah_suami');
            $table->string('nama_ibu_istri');
            $table->string('hari_rawat');
            $table->string('tanggal_rawat');
            $table->string('ruang');
            $table->string('kelas');
            $table->string('hari_kematian');
            $table->string('tgl_kematian');
            $table->string('pukul');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('penjamin');
            $table->string('dpjp');
            $table->string('asal_poli');
            $table->string('status_infeksi');
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
        Schema::dropIfExists('suket_kematian');
    }
}
