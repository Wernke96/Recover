<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function questview(){
        return view('question');
    }
    public function creatquestview(){
        return view("input-question");
    }
}
