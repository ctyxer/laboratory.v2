<?php

namespace App\Validators;

use App\Rules\FullName;
use Illuminate\Http\Request;
use Validator;

class TestFormValidator extends Validator
{
    public static function validation(Request $request)
    {
        return Validator::make($request->all(), [
            'full_name' => ['required', new FullName()],
            'email' => 'required|email:rfc,dns',
            'question_1' => 'required',
            'question_2' => 'required',
            'question_3' => 'required',
        ], [
                'required' => 'Поле должно быть заполнено.',
                'regex' => 'Введите номер телефона корректно.',
                'min' => 'Слишком короткий номер телефона.',
                'date' => 'Дата введена неверно.',
                'email' => 'Введите корректную почту (пример: example@email.com).',
            ]);
    }

    public static function validate(Request $request)
    {
        $validation = TestFormValidator::validation($request);

        if ($validation->fails()) {
            return true;
        }

        return false;
    }

    public static function message(Request $request)
    {
        $validation = TestFormValidator::validation($request);

        if ($validation->fails()) {
            return $validation->messages()->get('*');
        }

        return null;
    }
}