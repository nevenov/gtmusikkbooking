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
            $table->string('status')->nullable();
            $table->string('title');
            $table->string("slug");
            $table->text('body')->nullable();
            $table->string('audio1')->nullable();
            $table->string('audio2')->nullable();
            $table->string('audio3')->nullable();;
            $table->string('video1')->nullable();;
            $table->string('video2')->nullable();;
            $table->string('video3')->nullable();;
            $table->string('reference1')->nullable();;
            $table->string('reference2')->nullable();;
            $table->string('reference3')->nullable();;
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
