<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prompt extends Model
{
    protected $table = 'prompt';
    protected $paragraph = 'paragraph';
    protected $question = 'question';
    protected $correctA = 'correctA';
    protected $incorrectA1 = 'incorrectA1';
    protected $incorrectA2 = 'incorrectA2';
    protected $level = 'level';
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
