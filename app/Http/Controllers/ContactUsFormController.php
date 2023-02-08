<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('itcube42.contactForm');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ];

        $messages = [
            'name.required' => 'Введите Имя',
            'email.required' => 'Введите ваш email',
            'phone.required' => 'Введтие телефон для обратной связи',
            'subject.required' => 'Введите тему сообщения (кратко)',
            'message.required' => 'Введите вашы пожелания/замечания.',
            'captcha.required' => 'Введите Captcha!'
        ];

        $this->validate($request, $rules, $messages);

        //  Store data in database
        $contact =  new ContactForm();
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->subject = $request->get('subject');
        $contact->message = $request->get('message');
        $contact->save();

        //
        return back()->with('success', 'Мы получили ваше сообщение и хотели бы поблагодарить вас за то, что вы написали нам.');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
