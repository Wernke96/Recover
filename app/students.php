<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $table = 'students';
    protected $username = 'username';
    protected $password = 'password';
    protected $nameF = 'FirstName';
    protected $nameL = 'LastName';
    protected $email = 'email';
    // protected $L1NumQAsked = 'L1NumQAsked';
    // protected $L1NumQCorrect = 'L1NumQCorrect';
    // protected $L2NumQAsked = 'L2NumQAsked';
    // protected $L2NumQCorrect = 'L2NumQCorrect';
    // protected $L3NumQAsked = 'L3NumQAsked';
    // protected $L3NumQCorrect = 'L3NumQCorrect';
    // protected $L4NumQAsked = 'L4NumQAsked';
    // protected $L4NumQCorrect = 'L4NumQCorrect';
    // protected $L5NumQAsked = 'L5NumQAsked';
    // protected $L5NumQCorrect = 'L5NumQCorrect';
    // protected $L6NumQAsked = 'L6NumQAsked';
    // protected $L6NumQCorrect = 'L6NumQCorrect';
    // protected $L7NumQAsked = 'L7NumQAsked';
    // protected $L7NumQCorrect = 'L7NumQCorrect';
    // protected $L8NumQAsked = 'L8NumQAsked';
    // protected $L8NumQCorrect = 'L8NumQCorrect';
    // protected $L9NumQAsked = 'L9NumQAsked';
    // protected $L9NumQCorrect = 'L9NumQCorrect';
    // protected $L10NumQAsked = 'L10NumQAsked';
    // protected $L10NumQCorrect = 'L10NumQCorrect';
}

/*
    public function __constructor($username=null, $password=null, $nameF=null, $nameL=null, 
        $L1NumQAsked=null, $L2NumQAsked=null, $L3NumQAsked=null, $L4NumQAsked=null, $L5NumQAsked=null, $L6NumQAsked=null, $L7NumQAsked=null, $L8NumQAsked=null, $L9NumQAsked=null, $L10NumQAsked=null,
        $L1NumQCorrect=null, $L2NumQCorrect=null, $L3NumQCorrect=null, $L4NumQCorrect=null, $L5NumQCorrect=null, $L6NumQCorrect=null, $L7NumQCorrect=null, $L8NumQCorrect=null, $L9NumQCorrect=null, $L10NumQCorrect=null){
        $this->username = $username;
        $this->password = $password;
        $this->nameF = $nameF;
        $this->nameL = $nameL;
        $this->L1pct = $L1NumQAsked;
        $this->L2pct = $L2NumQAsked;
        $this->L3pct = $L3NumQAsked;
        $this->L4pct = $L4NumQAsked;
        $this->L5pct = $L5NumQAsked;
        $this->L6pct = $L6NumQAsked;
        $this->L7pct = $L7NumQAsked;
        $this->L8pct = $L8NumQAsked;
        $this->L9pct = $L9NumQAsked;
        $this->L10pct = $L10NumQAsked;

        $this->L1pct = $L1NumQCorrect;
        $this->L2pct = $L2NumQCorrect;
        $this->L3pct = $L3NumQCorrect;
        $this->L4pct = $L4NumQCorrect;
        $this->L5pct = $L5NumQCorrect;
        $this->L6pct = $L6NumQCorrect;
        $this->L7pct = $L7NumQCorrect;
        $this->L8pct = $L8NumQCorrect;
        $this->L9pct = $L9NumQCorrect;
        $this->L10pct = $L10NumQCorrect;

    }

    public function dbInsert($username=null, $password=null, $nameF=null, $nameL=null, 
        $L1NumQAsked=null, $L2NumQAsked=null, $L3NumQAsked=null, $L4NumQAsked=null, $L5NumQAsked=null, $L6NumQAsked=null, $L7NumQAsked=null, $L8NumQAsked=null, $L9NumQAsked=null, $L10NumQAsked=null,
        $L1NumQCorrect=null, $L2NumQCorrect=null, $L3NumQCorrect=null, $L4NumQCorrect=null, $L5NumQCorrect=null, $L6NumQCorrect=null, $L7NumQCorrect=null, $L8NumQCorrect=null, $L9NumQCorrect=null, $L10NumQCorrect=null){
        //populate student table
        DB::table('Student')->insert(
            ['username' => $username,
             'password' => $password,
             'FirstName' => $nameF,
             'LastName' => $nameL,
             'L1pct' => $L1NumQAsked,
             'L2pct' => $L2NumQAsked,
             'L3pct' => $L3NumQAsked,
             'L4pct' => $L4NumQAsked,
             'L5pct' => $L5NumQAsked,
             'L6pct' => $L6NumQAsked,
             'L7pct' => $L7NumQAsked,
             'L8pct' => $L8NumQAsked,
             'L9pct' => $L9NumQAsked,
             'L10pct' => $L10NumQAsked,
             'L1pct' => $L1NumQCorrect,
             'L2pct' => $L2NumQCorrect,
             'L3pct' => $L3NumQCorrect,
             'L4pct' => $L4NumQCorrect,
             'L5pct' => $L5NumQCorrect,
             'L6pct' => $L6NumQCorrect,
             'L7pct' => $L7NumQCorrect,
             'L8pct' => $L8NumQCorrect,
             'L9pct' => $L9NumQCorrect,
             'L10pct' => $L10NumQCorrect]
        );
    }

    public function deGet($level, $ID){
        
    }

    
    public function getUsername(){ return $username; }
    public function getPassword(){ return $password; }
    public function getFirstName(){ return $nameF; }
    public function getLastName(){ return $nameL; }

    public function getL1NumQCorrect(){ return $L1NumQCorrect; }
    public function getL2NumQCorrect(){ return $L2NumQCorrect; }
    public function getL3NumQCorrect(){ return $L3NumQCorrect; }
    public function getL4NumQCorrect(){ return $L4NumQCorrect; }
    public function getL5NumQCorrect(){ return $L5NumQCorrect; }
    public function getL6NumQCorrect(){ return $L6NumQCorrect; }
    public function getL7NumQCorrect(){ return $L7NumQCorrect; }
    public function getL8NumQCorrect(){ return $L8NumQCorrect; }
    public function getL9NumQCorrect(){ return $L9NumQCorrect; }
    public function getL10NumQCorrect(){ return $L10NumQCorrect; }

    public function getL1NumQAsked(){ return $L1NumQAsked; }
    public function getL2NumQAsked(){ return $L2NumQAsked; }
    public function getL3NumQAsked(){ return $L3NumQAsked; }
    public function getL4NumQAsked(){ return $L4NumQAsked; }
    public function getL5NumQAsked(){ return $L5NumQAsked; }
    public function getL6NumQAsked(){ return $L6NumQAsked; }
    public function getL7NumQAsked(){ return $L7NumQAsked; }
    public function getL8NumQAsked(){ return $L8NumQAsked; }
    public function getL9NumQAsked(){ return $L9NumQAsked; }
    public function getL10NumQAsked(){ return $L10NumQAsked; }
*/