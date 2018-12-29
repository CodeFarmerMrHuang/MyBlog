<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nick',32)->comment('昵称');
            $table->string('name',32)->nullable()->comment('姓名');
            $table->string('last_ip',16)->nullable()->comment('最后一次登录ip');
            $table->string('qq')->nullable()->comment('QQ');
            $table->bigInteger('phone')->nullable()->comment('手机号码');
            $table->string('email')->nullable()->comment('电子邮箱');
            $table->string('password')->comment('密码');
            $table->tinyInteger('role')->default('0')->comment('权限');
            $table->tinyInteger('status')->default('1')->comment('账号状态');
            $table->timestamp('last_login_time')->nullable()->comment('最后一次登录时间');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => '黄飞霰',
            'nick' => '黄先生',
            'email' => 'xiangandzai@gmail.com',
            'password' => md5('x123145'),
            'role' => '1',
            'status' => '1',
            'phone' => '15967689229',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
