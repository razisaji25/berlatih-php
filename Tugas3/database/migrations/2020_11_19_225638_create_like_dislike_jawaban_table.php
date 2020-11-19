<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
                $table->unsignedBigInteger('profil_id');
                $table->foreign('profil_id')->references('id')->on('profil');
                $table->unsignedBigInteger('pertanyaan_id');
                $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
                $table->integer('poin',11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_jawaban');
    }
}