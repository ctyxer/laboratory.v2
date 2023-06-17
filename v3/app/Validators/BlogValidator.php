<?php

namespace App\Validators;

use App\Rules\FullName;
use Illuminate\Http\Request;
use Validator;

class BlogValidator extends Validator
{
    public static function validation(Request $request)
    {
        return Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'mimes:png,jpg,jpeg,gif',
            'description' => 'required'
        ]);
    }

    public static function validate(Request $request)
    {
        $validation = BlogValidator::validation($request);

        if ($validation->fails()) {
            return true;
        }

        return false;
    }

    public static function message(Request $request)
    {
        $validation = BlogValidator::validation($request);

        if ($validation->fails()) {
            return $validation->messages()->get('*');
        }

        return null;
    }
}