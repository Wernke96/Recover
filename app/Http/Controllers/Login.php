<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
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
                'fn'=>'required',
                'ln'=>'required',
                'username'=>'required',
                'password'=>'required',

            ]);
            print_r($valid);
            $teacher = new $teacher();
            $teacher->username = $request->input('username');
            $teacher->firstname = $request->input('firstname');
            $teacher->Last_name = $request->input('Last_name');
            $teacher->password = $request->input('password');
            $teacher->save();
          
            return redirect('/stores')->with('success', 'Post Created');

    }
}
