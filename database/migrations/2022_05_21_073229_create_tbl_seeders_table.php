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
        Schema::create('tbl_seeders', function (Blueprint $table) {
            $table->id();
            $table->string('no_pol');
            $table->string('kode_unik');
            $table->integer('status');
            $table->timestamp('jam_masuk')->nullable()->default(null);
            $table->timestamp('jam_keluar')->nullable()->default(null);
            $table->integer('id_tipe_kendaraan');
            $table->integer('id_tarif');
            $table->integer('id_created');
            $table->integer('id_updated');
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
        Schema::dropIfExists('tbl_seeders');
    }
};
