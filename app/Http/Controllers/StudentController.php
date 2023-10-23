<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $data = [
            'user' => $user,
        ];
        return view('student.index', $data);
    }
    public function schedule()
    {
        $teacher = Teacher::where('user_id', Auth::user()->id)->first();
        $student = Student::where('user_id', Auth::user()->id)->first();
        if ($student != null) {
            $schedule = Schedule::join('periods', 'periods.id', 'schedules.id')
                ->join('subjects', 'subjects.id', 'schedules.id')
                ->where('parallel_id', $student->parallel_id)
                ->where('stage_id', $student->stage_id)
                ->get();
        } else if ($teacher != null) {
            $schedule = Schedule::join('periods', 'periods.id', 'schedules.id')
                ->join('subjects', 'subjects.id', 'schedules.id')
                ->where('teacher_id', $teacher->id)->get();
        }
        $data = [
            'student' => $student,
            'schedule' => $schedule
        ];
        //return ($data);
        return view('student.schedule', $data);
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
    public function show($id)
    {
        $grades = Grade::where('student_id', $id)->get();
        $grades = Grade::join('subjects', 'subjects.id', 'grades.subject_id')->where('student_id', $id)->get();
        $data = [
            'grades' => $grades,
        ];
        return view('student.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
