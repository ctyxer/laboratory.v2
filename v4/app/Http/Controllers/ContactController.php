<?php

namespace App\Http\Controllers;

use App\Rules\FullName;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'full_name' => ['required', new FullName()],
            'age' => 'required',
            'sex' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'email' => 'required|email:rfc,dns',
            'date' => 'required|date',
        ], [
            'required' => 'Поле должно быть заполнено.',
            'regex' => 'Введите номер телефона корректно.',
            'min' => 'Слишком короткий номер телефона.',
            'date' => 'Дата введена неверно.',
            'email' => 'Введите корректную почту (пример: example@email.com).'
        ]);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }

        return redirect()->back()->with('message', 'Успешно');
    }
}
