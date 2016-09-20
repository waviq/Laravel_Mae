<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionTable extends Migration
{

    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('type_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('no_question')->nullable();
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->boolean('answered')->default(false);
            $table->timestamps();
        });

        Schema::create('type_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::table('questions', function (Blueprint $kolom){
            $kolom->foreign('type_id')->references('id')
                ->on('type_questions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('questions', function (Blueprint $kolom){
            $kolom->foreign('user_id')->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::drop('questions');
        Schema::drop('type_questions');
    }
}
