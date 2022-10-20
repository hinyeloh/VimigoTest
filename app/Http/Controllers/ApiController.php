<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    public function create(Request $requset){
        $students = new Student();

        $students->name = $requset->input('name');
        $students->email = $requset->input('email');
        $students->address = $requset->input('address');
        $students->password = $requset->input('password');

        $students->save();
        return response()->json($students);
    }
}
