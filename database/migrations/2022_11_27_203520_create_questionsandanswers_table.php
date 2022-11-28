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
            $table->unsignedBigInteger('pk_idusers');
            $table->foreign('pk_idusers')->references('pk_idusers')->on('tb_users')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('tb_answers', function (Blueprint $table) {
            $table->id('pk_idanswers');
            $table->string('answers', 600);
            $table->unsignedBigInteger('pk_idusers');
            $table->foreign('pk_idusers')->references('pk_idusers')->on('tb_users')->onDelete('cascade');
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
