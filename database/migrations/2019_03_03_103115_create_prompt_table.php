<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prompt', function (Blueprint $table) {
            $table->bigIncrements('id');
         
            $table->string('paragraph');
            $table->string('question');
            $table->string('correctA');
            $table->string('incorrectA1');
            $table->string('incorrectA2');
            $table->int('level');
            $table->timestamps();
        });
    }
    // rotected $table1 = 'prompt';
    // protected $paragraph = 'paragraph';
    // protected $question = 'question';
    // protected $correctA = 'correctA';
    // protected $incorrectA1 = 'incorrectA1';
    // protected $incorrectA2 = 'incorrectA2';
    // protected $level = 'level';

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prompt');
    }
}
