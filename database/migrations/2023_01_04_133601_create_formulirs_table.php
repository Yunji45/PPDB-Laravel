<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            // Data murid
            $table->bigIncrements('id');
            $table->string('file');
            $table->string('nama_lengkap', 150);
            $table->string('nama_panggilan', 50);
            // 5.Prestasi
            $table->string('prestasi', 150)->nullable();
            // Informasi smk wikrama garut dari mana
            $table->string('info_wk', 50);
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
        Schema::dropIfExists('formulirs');
    }
}
