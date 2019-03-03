<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\teacher;
use DB;
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
        public function stores(Request $request){
            $valid = $request->validate([
                'email'=>'required',
                'ln'=>'required',
                'fn'=>'required',
                'username'=>'required',
                'password'=>'required',

            ]);
            print_r($valid);
            $teacher = new teacher;
            $teacher->username = $request->input('username');
            $teacher->email = $request->input('email');
            $teacher->firstname = $request->input('fn');
            $teacher->Lastname = $request->input('ln');
            $teacher->password = $request->input('password');
            $teacher->save();
          
            return redirect('/')->with('success', 'Post Created');

    }
}
