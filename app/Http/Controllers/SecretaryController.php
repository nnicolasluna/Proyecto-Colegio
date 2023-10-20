<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Secretary;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function teachers()
    {
        $teachers = User::distinct()->join('teachers', 'teachers.user_id', 'users.id')
            ->get(['users.name', 'paternal', 'maternal', 'ci', 'users.id']);
        $secretaries = User::distinct()->join('secretaries', 'secretaries.user_id', 'users.id')
            ->get(['users.name', 'paternal', 'maternal', 'ci', 'users.id']);
        $subjects = Subject::all();
        $users = User::all();
        $data = [
            'teachers' => $teachers,
            'secretaries' => $secretaries,
            'subjects' => $subjects,
            'users' => $users,
        ];
        //return ($data);
        return view('secretary.teachers', $data);
    }
    public function students()
    {
        $students = User::distinct()->join('students', 'students.user_id', 'users.id')
            ->get(['users.name', 'paternal', 'maternal', 'ci', 'users.id']);
        $data = [
            'students' => $students,
        ];
        //return ($data);
        return view('secretary.students', $data);
    }
    public function users()
    {
        $users = User::all();
        $data = [
            'users' => $users,
        ];
        //return ($data);
        return view('secretary.students', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = 'nicolas@luna';
        $user->maternal = $request->maternal;
        $user->paternal = $request->paternal;
        $user->ci = $request->ci;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->date = '1989-02-18';
        $user->password = $request->ci;
        $user->save();
        return redirect(RouteServiceProvider::HOME);
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
