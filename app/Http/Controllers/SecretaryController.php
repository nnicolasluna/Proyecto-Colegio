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
use Illuminate\Support\Facades\Auth;

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
        $user->email = $request->name;
        $user->maternal = $request->maternal;
        $user->paternal = $request->paternal;
        $user->ci = $request->ci;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->date =  $request->date;
        $user->password = $request->ci;
        $user->save();
        return view('secretary.teachers');
    }

    public function show($id)
    {
        $user = User::find($id);
        $teachers = Teacher::join('parallels', 'parallels.id', '=', 'teachers.parallel_id')
            ->join('stages', 'stages.id', '=', 'teachers.stage_id')
            ->where('user_id', $id)->get();
        $data = [
            'user' => $user,
            'teachers' => $teachers
        ];
        //return $teachers;
        return view('user.show', $data);
    }
    /**
     * Display the specified resource.
     */


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
