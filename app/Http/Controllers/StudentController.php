<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        //return 'Halo peserta diklat';
        return view('student.index');
    }

    public function create()
    {
        return view('student.create');
    }
}
