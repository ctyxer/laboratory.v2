<?php

namespace App\Validators;

use Illuminate\Http\Request;
use Validator;

class AnswersValidator extends Validator
{
    public static function score(Request $request) {
        $score = 0;
        $question1 = $request->question_1;
        $question2 = $request->question_2;
        $question3 = trim($request->question_3);

        if(AnswersValidator::firstQuestionIsCorrect($question1)) $score++;
        if(AnswersValidator::secondQuestionsCorrect($question2)) $score++;
        if(AnswersValidator::thirdQuestionIsCorrect($question3)) $score++;

        return $score;
    }

    public static function firstQuestionIsCorrect($question): bool{
        return $question == "Событие называется случайным, если при осуществлении совокупности условий S оно может либо произойти, либо не произойти.";
    }

    public static function secondQuestionsCorrect($question): bool{
        return $question == "0.98";
    }

    public static function thirdQuestionIsCorrect($question): bool{
        return $question == "1";
    }
}