<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratIstirahatIgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_istirahat_igd', function (Blueprint $table) {
            $table->id();
            $table->string('no_medrek');
            $table->string('no_surat');
            $table->string('nama');
            $table->string('umur');
            $table->string('golongan');
            $table->string('jabatan');
            $table->string('unit');
            $table->string('lama_istirahat_mulai');
            $table->string('lama_istirahat_akhir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('dpjp');
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
        Schema::dropIfExists('surat_istirahat_igd');
    }
}
