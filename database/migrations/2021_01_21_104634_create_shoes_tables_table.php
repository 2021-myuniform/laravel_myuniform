<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoesTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('jancode')->nullable();
            $table->string('gender')->nullable();
            $table->string('adult')->nullable();
            $table->integer('price')->nullable();
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('color')->nullable();
            $table->string('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoes_tables');
    }
}
