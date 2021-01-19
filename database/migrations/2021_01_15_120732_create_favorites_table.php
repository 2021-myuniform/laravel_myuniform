<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// たぶんこれも参考になる記事
// https://qiita.com/Hiroyuki-Hiroyuki/items/e5cb3b6595a7e476b73d

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
            $table->id();
            $table->timestamps();
            $table->integer('member_id')->unsigned();
            $table->integer('tops_id')->unsigned();
            $table->integer('pants_id')->unsigned();
            $table->integer('shoes_id')->unsigned();

            $table->foreign('member_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); // userが削除されたとき、それに関連するlikeも一気に削除される

            $table->foreign('tops_id')
                ->references('id')
                ->on('tops')
                ->onDelete('cascade'); // postが削除されたとき、それに関連するlikeも一気に削除される

            $table->foreign('pants_id')
                ->references('id')
                ->on('pants')
                ->onDelete('cascade'); // postが削除されたとき、それに関連するlikeも一気に削除される

            $table->foreign('shoes_id')
                ->references('id')
                ->on('shoes')
                ->onDelete('cascade'); // postが削除されたとき、それに関連するlikeも一気に削除される

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
