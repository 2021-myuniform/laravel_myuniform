<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned()->index();
            $table->integer('tops_id')->unsigned()->index();
            $table->integer('pants_id')->unsigned()->index();
            $table->integer('shoes_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tops_id')->references('id')->on('tops')->onDelete('cascade');
            $table->foreign('pants_id')->references('id')->on('pants')->onDelete('cascade');
            $table->foreign('shoes_id')->references('id')->on('shoes')->onDelete('cascade');

            $table->unique(['member_id', 'tops_id', 'pants_id', 'shoes_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
    //  * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
