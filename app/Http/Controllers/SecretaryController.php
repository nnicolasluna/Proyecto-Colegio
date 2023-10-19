<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function teachers()
    {
        $teachers = Teacher::join('users', 'users.id', "=", 'teachers.user_id')->distinct()->paginate(11);
        $data = [
            'teachers' => $teachers,
        ];
        //return ($data);
        return view('secretary.teachers',$data);
    }
    public function students()
    {
        $students = Student::join('users', 'users.id', "=", 'students.user_id')->distinct()->paginate(11);
        $data = [
            'students' => $students,
        ];
        //return ($data);
        return view('secretary.students',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Secretary $secretary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretary $secretary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Secretary $secretary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretary $secretary)
    {
        //
    }
}
