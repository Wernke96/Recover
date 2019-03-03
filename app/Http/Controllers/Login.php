<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\teacher;
use App\students;
use App\prompt;

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
     

        public function createprompt(Request $request){
            $valid = $request->validate([
                'paragraph'=>'required',
                'question'=>'required',
                'correctA'=>'required',
                'incorrectA1'=>'required',
                'incorrectA2'=>'required',
                'level'=>'required',

            ]);
            print_r($valid);
            $prompt = new prompt;
            $prompt->paragraph = $request->input('paragraph');
            $prompt->question = $request->input('question');
            $prompt->correctA = $request->input('correctA');
            $prompt->incorrectA1 = $request->input('incorrectA1');
            $prompt->incorrectA2 = $request->input('incorrectA2');
            $prompt->level = $request->input('level');
            $prompt->save();
          
            return redirect('/')->with('success', 'Post Created');
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
