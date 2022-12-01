<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_questions', function (Blueprint $table) {
            $table->id('pk_idquestions');
            $table->string('questions', 600);
            $table->unsignedBigInteger('fk_idusers');
            $table->boolean('private');
            $table->foreign('fk_idusers')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('tb_answers', function (Blueprint $table) {
            $table->id('pk_idanswers');
            $table->string('answers', 600);
            $table->unsignedBigInteger('fk_idquestions');
            $table->foreign('fk_idquestions')->references('pk_idquestions')->on('tb_questions')->onDelete('cascade');
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
        Schema::dropIfExists('tb_questions');
        Schema::dropIfExists('tb_answers');

    }
};
