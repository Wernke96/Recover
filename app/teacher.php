<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    private $id;
    private $teacheruser;
    private $teacherpasswd;

    public function construct(){
        }
    public function setEmail(){
        $this->teacherpasswd=$passwd;
        $this->teacheruser=$teacher; 
    }
    //
}
