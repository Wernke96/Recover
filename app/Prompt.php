<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    protected $table1 = 'PromptL1';
    protected $table2 = 'PromptL2';
    protected $table3 = 'PromptL3';
    protected $table4 = 'PromptL4';
    protected $table5 = 'PromptL5';
    protected $table6 = 'PromptL6';
    protected $table7 = 'PromptL7';
    protected $table8 = 'PromptL8';
    protected $table9 = 'PromptL9';
    protected $table10 = 'PromptL10';

    protected $paragraph = 'paragraph';
    protected $question = 'question';
    protected $correctA = 'correctA';
    protected $incorrectA1 = 'incorrectA1';
    protected $incorrectA2 = 'incorrectA2';
}

    /*
    //contruct
    public function __constructor($paragraph=null, $question=null, $correctA=null, $incorrectA1=null, $incorrectA2=null, $level=null){
        $this->paragraph = $paragraph;
        $this->question = $question;
        $this->correctA = $correctA;
        $this->incorrectA1 = $incorrectA1;
        $this->incorrectA2 = $incorrectA2;
        $this->level = $level;


        //populate student table
        DB::table('QuestionsL' + $level)->insert(
            ['paragraph' => $paragraph,
                'question' => $question,
                'correctA' => $correctA,
                'incorrectA1' => $incorrectA1,
                'incorrectA2' => $incorrectA2,
                'level' => $level]
        );
    }

    public function dbInsert($paragraph=null, $question=null, $correctA=null, $incorrectA1=null, $incorrectA2=null, $level=null){
                //populate student table
                DB::table('PromptL' + $level)->insert(
                    ['paragraph' => $paragraph,
                        'question' => $question,
                        'correctA' => $correctA,
                        'incorrectA1' => $incorrectA1,
                        'incorrectA2' => $incorrectA2]
                );
    }

    public function getParagraph(){ return $paragraph; }
    public function getQuestion(){ return $question; }
    public function getAnswerIncorrect1(){ return $incorrectA1; }
    public function getAnswerIncorrect2(){ return $incorrectA2; }
    public function getAnswerCorrect(){ return $correctA; }
    public function getLevel(){ return $level; }

    */
