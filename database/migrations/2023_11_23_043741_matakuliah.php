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
    public function up() {
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul');
            $table->integer('sks');
            $table->string('ruang');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('matakuliah');
    }
};
