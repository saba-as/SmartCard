<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return view('students.list');
    }


    public function view_new(){
        return view('students.new');
    }
}
