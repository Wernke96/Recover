<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    private $username;
    private $password;
    private $nameF;
    private $nameL;
    private $L1pct;
    private $L2pct;
    private $L3pct;
    private $L4pct;
    private $L5pct;


    //contruct
    public function __constructor($username=null, $password=null, $nameF=null, $nameL=null, $L1pct=null, $L2pct=null, $L3pct=null, $L4pct=null, $L5pct=null){
        $this->username = $username;
        $this->password = $password;
        $this->nameF = $nameF;
        $this->nameL = $nameL;
        $this->L1pct = $L1pct;
        $this->L2pct = $L2pct;
        $this->L3pct = $L3pct;
        $this->L4pct = $L4pct;
        $this->L5pct = $L5pct;

        //populate student table

        $table->bigIncrements('id');
    }

    
    public function getUsername(){
        return $username;
    }

    public function getPassword(){
        return $password;
    }

    //getStudentName
    public function getFirstName(){
        return $nameF;
    }

    public function getLastName(){
        return $nameL;
    }

    //getStudentL1pct
    public function getL1pct(){
        return $L1pct;
    }

    //getStudentL2pct
    public function getL2pct(){
        return $L2pct;
    }

    //getStudentL3pct
    public function getL3pct(){
        return $L3pct;
    }
    
    //getStudentL4pct
    public function getL4pct(){
        return $L4pct;
    }
    
    //getStudentL5pct
    public function getL5pct(){
        return $L5pct;
    }

    //getparagraph
    public function getParagraph(){
        $paragraph = null;
        //db query
        return $paragraph;
    }

    //getQuestion
    public function getQuestion(){
        $question = null;
        //db query
        return $question;
    }

    //getQuestionAnswerIncorrect
    public function getAnswerIncorrect(){
        $incorrect = null;
        //db query
        return $incorrect;
    }

    //getQuestionAswerCorrect
    public function getAnswerCorrect(){
        $correct = null;
        //db query
        return $correct;
    }
}
