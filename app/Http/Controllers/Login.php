<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
        public function index(){
            return view('index');
        }
        public function register(){
            return view('register');
        }
        public function question(){
            
            return view('question');
        }
}
