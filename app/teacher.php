<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class teacher extends Model

{
    protected $table = "teachers";
    protected $id = "id";
    protected $username="user";
    protected $password="password";
    protected $email = "email";
    protected $first ="firstname";
    protected $last ="lastname";


    }
