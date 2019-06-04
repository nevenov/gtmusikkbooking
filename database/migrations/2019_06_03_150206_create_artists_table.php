<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable()->index();
            $table->integer('photo_id')->nullable()->index();
            $table->string('status');
            $table->string('title');
            $table->string("slug");
            $table->text('body');
            $table->string('audio1');
            $table->string('audio2');
            $table->string('audio3');
            $table->string('video1');
            $table->string('video2');
            $table->string('video3');
            $table->string('reference1');
            $table->string('reference2');
            $table->string('reference3');
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
        Schema::dropIfExists('artists');
    }
}
