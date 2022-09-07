<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApplyController extends Controller
{
    public function index()
    {
        return view('apply.index');
    }

    /**
     * Show the step One Form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $student = $request->session()->get('student');

        return view('apply.create-step-one',compact('student'));
    }

    /**
     * Student Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function studentCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'inputsCertificate' => 'required|numeric|min:10|max:10',
            'first_name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'gender' => 'required',
            'data_of_birth' => 'required|date',
            'home_address_1' => 'required',
            'home_address_2' => 'required',
            'class_education' => 'required',
            'location_education' => 'required',
        ]);

        if(empty($request->session()->get('student'))){
            $student = new Student();
            $student->fill($validatedData);
            $request->session()->put('product', $student);
        }else{
            $student = $request->session()->get('student');
            $student->fill($validatedData);
            $request->session()->put('student', $student);
        }

        return redirect()->route('students.create.step.two');
    }

    /**
     * Show the step One Form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $student = $request->session()->get('student');

        return view('students.create-step-two',compact('student'));
    }

    /**
     * Show the step One Form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'parents' => 'required',
            'email_address_0' => 'required',
            'telephone_mobile' => 'required',
        ]);

        $student = $request->session()->get('student');
        $student->fill($validatedData);
        $request->session()->put('student', $student);

        return redirect()->route('students.create.step.three');
    }

    /**
     * Show the step One Form for creating a new student.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $student = $request->session()->get('student');

        return view('students.create-step-three',compact('student'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'arrows' => 'required',
            'comments' => 'required',
            'old_arrow' => 'required',
        ]);

        $student = $request->session()->get('student');
        $student->fill($validatedData);
        $request->session()->put('student', $student);

        return redirect()->route('students.create.step.completed');
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentCreateCompleatedForm(Request $request)
    {
        $student = $request->session()->get('student');
        $student->save();

        $request->session()->forget('student');

        return redirect()->route('students.index');
    }

//    public function apply(){
//        return view('apply/index');
//    }
}
