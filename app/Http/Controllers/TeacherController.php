<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view("teacher.dashboard");
    }

    public function teacherlogin(Request $req)
    {
        if ($req->method() == "POST") {
            $data = $req->only(["email", "password"]);

            if (Auth::guard("teacher")->attempt($data)) { 
                
                return redirect()->route("teacher.panel");
            } else {
                return redirect()->back()->with("alert","Please enter valid email or password");
            }
        }
        return view('teacher.teacherlogin');
    }

    public function teacherlogout(Request $req)
    {
        Auth::guard("teacher")->logout();
        return redirect()->back();
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
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
