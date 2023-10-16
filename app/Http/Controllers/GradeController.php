<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show($subject,$stage,$parallel)
    {
        $teacher = Teacher::where('user_id',Auth::user()->id)->where('parallel_id',$parallel)->where('stage_id',$stage)->first();
        $grades = Grade::join('students','students.id','grades.student_id')
        ->join('users','users.id','students.user_id')
        ->where('teacher_id',$teacher->id)
        ->where('subject_id',$subject)->get();
        $detail = Teacher::join('parallels','parallels.id','teachers.parallel_id')
        ->join('stages','stages.id','teachers.stage_id')
        ->where('user_id',Auth::user()->id)
        ->where('parallel_id',$parallel)
        ->where('stage_id',$stage)
        ->first();
        $subject = Subject::where('id',$subject)->first();
        $data = [
            'grades' => $grades,
            'detail' =>$detail,
            'subject' =>$subject,
        ];
        //return($data);
        return view('grade.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($student,$subject,$teacher)
    {
        $grades = Grade::where('subject_id',$subject)->where('student_id',$student)->where('teacher_id',$teacher)->first();
        $user = Student::where('id',$student)->first();
        $student = User::where('id',$user->user_id)->first();
        
        $data = [
            'student' => $student,
            'grades' => $grades
        ];
        //return $data;
        return view('grade.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
