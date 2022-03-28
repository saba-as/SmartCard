<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){

        $data = array(
            "usersCount" => User::count(),
            "studentsCount" => Student::count(),
            "lastStudentsCount" => Student::where('created_at', '>', Carbon::now()->subMinutes(10080))->count(),
        );
        return view('dashboard', compact('data'));
    }
}
