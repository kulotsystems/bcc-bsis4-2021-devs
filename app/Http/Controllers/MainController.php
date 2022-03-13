<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MainController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $groups = [];
        foreach(Group::select('*')->orderBy('id', 'DESC')->get() as $group) {
            $group->students;
            $groups[$group->id] = $group;
        }

        $students = [];
        foreach (Student::select('*')->orderBy('last_name')->orderBy('first_name')->get() as $student) {
            $student->group;
            $students[$student->id] = $student;
        }

        return response([
            'students' => $students,
            'groups'   => $groups
        ]);
    }
}
