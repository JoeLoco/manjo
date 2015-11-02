<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('categories', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name',50);
            $table->text('description');   
            $table->timestamps();
            
        });
        
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->text('description');
            
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
    
            $table->timestamps();
        });
        
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('nick_name',100);
            $table->integer('github_id')->unique();
            $table->string('email')->unique();
            $table->string('avatar');
            $table->string('phrase');
            $table->string('working_at',100);

            $table->integer('love_skill_id')->unsigned()->nullable();
            $table->foreign('love_skill_id')->references('id')->on('skills');
            
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('skill_user', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('skill_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->integer('level')->unsigned();
            $table->boolean('love');
            
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->foreign('user_id')->references('id')->on('users');
        
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
        Schema::drop('users');
    }
}
