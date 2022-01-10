<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();

            $table->string('nmpeg', 100)->nullable();
            $table->string('npwp', 100)->nullable()->default('00000000000');
            $table->string('nmrek', 100)->nullable();
            $table->string('nm_bank', 100)->nullable();
            $table->string('rekening', 100)->nullable();
            $table->bigInteger('bersih')->nullable();
            $table->string('sandi')->nullable();
            $table->string('kdbankspan', 100)->nullable();
            $table->string('kdswift', 100)->nullable();
            $table->string('kdpos', 7)->nullable();
            $table->string('kdnegara', 2)->nullable();
            $table->string('kdkppn', 10)->nullable();
            $table->string('tipe_supplier', 3)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('telepon', 100)->nullable();
            $table->string('kdiban', 100)->nullable();
            $table->string('alamat2', 100)->nullable();
            $table->string('kdnab', 100)->nullable();
            $table->string('kdlokasi2', 100)->nullable();
            $table->string('kdkabkota2', 100)->nullable();
            $table->string('nrs', 100)->nullable();
            $table->string('nip', 100)->nullable();
            $table->string('nama_supplier', 100)->nullable();
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
        Schema::dropIfExists('pegawais');
    }
}
