<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブル作成
        Schema::create('posts', function (Blueprint $table){

        // カラム作成
        $table->increments('id');
        $table->string('post_body');
        $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  テーブル削除
        Schema::drop('posts');
    }
}
