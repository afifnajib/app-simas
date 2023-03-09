<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    public function index(){
        
        return view('students.student');
    }

    public function create() {
        return view('students.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|min:5|max:50',
            'nipd' => 'required|max:5',
            'gender' => 'required|in:L,P',
            'nisn' => 'required|max:10',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'nik' => 'required|max:16',
            'religion' => 'required',
            'address' => 'required',
            'rt' => '',
            'rw' => '',
            'hamlet' => 'required',
            'urban_village' => 'required',
            'sub_district' => 'required',
            'postal_code' => 'required',
            'type_stay' => '',
            'transport' => '',
            'telp' => '',
            'hp' => 'required',
            'email' => 'required',
            'skhun' => '',
            'receiver_kps' => '',
            'no_kps' => ''
        ]);
        Student::create($validateData);
        return "Succesfully";
    }
}
