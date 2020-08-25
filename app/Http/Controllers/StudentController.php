<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('students.all');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        return view('students.show');
    }
}
