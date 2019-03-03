<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\teacher;
use App\students;

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
        public function studnetregview(){
            return view('regstud');
        }

        public function createprompt(){
            return view('input-question');
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
    public function studentSubmit(Request $request){
        $valid = $request->validate([
            'email'=>'required',
            'ln'=>'required',
            'fn'=>'required',
            'username'=>'required',
            'password'=>'required',

        ]);
        print_r($valid);
        $student = new students;
        $student->username = $request->input('username');
        $student->email = $request->input('email');
        $student->firstname = $request->input('fn');
        $student->Lastname = $request->input('ln');
        $student->password = $request->input('password');
        $student->save();
      
        return redirect('/')->with('success', 'Post Created');
        }
}
