<?php

namespace App;

use Illuminate\Database\oquent\Model;

class Teacher extends Model
{
    protected $table = 'Teacher';
    protected $username = 'username';
    protected $password = 'password';
    protected $nameF = 'FirstName';
    protected $nameL = 'LastName';
    protected $classSize = 'classSize';
    protected $className = 'className';
}
