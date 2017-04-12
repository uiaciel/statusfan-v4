<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table){
          $table->increments('id');
          $table->string('user_id');
          $table->string('judul')->unique();
          $table->string('deskripsi');
          $table->text('konten');
          $table->string('slug')->unique();
          $table->string('kategori_id');
          $table->string('gambar');
          $table->text('sumber_gambar');
          $table->string('active');
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
        Schema::drop('blogs');
    }
}
