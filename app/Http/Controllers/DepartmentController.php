<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        $data['title'] = "Departments";
        $data['departments'] = Department::paginate(2);
        return view('departments.index', $data);
    }
}
