<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMd5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('original_string')->comment('原字符串')->unique();
            $table->string('md5_string')->comment('加密后字符串');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('md5');
    }
}
