<?php

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();  //邮箱验证时间
            $table->string('password');
            $table->integer('student_code')->unique()->nullable();//Auto generated
            $table->string('role');  //用戶角色
            $table->string('address')->default('');  //地址
            $table->string('pic_path')->default('');  //头像
            $table->string('gender')->default('');  //性别
            $table->string('phone_number')->unique()->default('');  //手机号
            $table->string('nationality')->default('');  //国籍
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
