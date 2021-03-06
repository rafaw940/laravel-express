<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            
            /*RELACIONA COM O POST*/
            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
            
            $table->string('name');
            $table->string('email');
            $table->text('comment');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('comments');
    }
}
