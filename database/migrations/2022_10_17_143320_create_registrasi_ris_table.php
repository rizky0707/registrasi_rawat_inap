<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiRisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {   
        Schema::create('registrasi_ris', function (Blueprint $table) {
            $table->id();
            $table->string('no_medrek');
            $table->string('nama');
            $table->string('umur');
            $table->string('tgl_masuk');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('r_rawat');
            $table->string('hak_ruangan');
            $table->string('hak_kelas');
            $table->string('penjamin');
            $table->string('asal_poli');
            $table->string('dpjp');
            $table->string('diagnosa');
            $table->string('keterangan');
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
        Schema::dropIfExists('registrasi_ris');
    }
}
