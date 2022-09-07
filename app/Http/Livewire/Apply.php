<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Apply extends Component
{
    public $currentStep = 1;
    public $inputsCertificate, $first_name, $surname, $patronymic, $gender, $data_of_birth, $home_address_1, $home_address_2, $class_education, $location_education, $parents, $email_address_0, $telephone_mobile, $arrows, $comments, $old_arrow, $verified = 0, $accepted = 0;
    public $successMessage = '';


    public function render()
    {
        return view('livewire.apply');
    }

    // Student data
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
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

        $this->currentStep = 2;
    }

    // Parent data
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'parents' => 'required',
            'email_address_0' => 'required',
            'telephone_mobile' => 'required',
        ]);

        $this->currentStep = 3;
    }

    // Arrow data
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'arrows' => 'required',
            'comments' => 'required',
            'old_arrow' => 'required',
        ]);

        $this->currentStep = 4;
    }

    public function submitForm()
    {
        Product::create([
            'inputsCertificate' => $this->inputsCertificate,
            'first_name' => $this->first_name,
            'surname' => $this->surname,
            'patronymic' => $this->patronymic,
            'gender' => $this->gender,
            'data_of_birth' => $this->data_of_birth,
            'home_address_1' => $this->home_address_1,
            'home_address_2' => $this->home_address_2,
            'class_education' => $this->class_education,
            'location_education' => $this->location_education,
            'parents' => $this->parents,
            'email_address_0' => $this->email_address_0,
            'telephone_mobile' => $this->telephone_mobile,
            'arrows' => $this->arrows,
            'comments' => $this->comments,
            'old_arrow' => $this->old_arrow,
        ]);

        $this->successMessage = 'Student Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->inputsCertificate = '';
            $this->first_name = '';
            $this->surname = '';
            $this->patronymic = '';
            $this->gender = '';
            $this->data_of_birth = '';
            $this->home_address_1 = '';
            $this->home_address_2 = '';
            $this->class_education = '';
            $this->location_education = '';
            $this->parents = '';
            $this->email_address_0 = '';
            $this->telephone_mobile = '';
            $this->arrows = '';
            $this->comments = '';
            $this->old_arrow = '';

            $this->accepted = 0;
            $this->verified = 0;
    }
}
