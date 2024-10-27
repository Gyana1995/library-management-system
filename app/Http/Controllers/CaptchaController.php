<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function refreshCaptcha()
    {
        // Generate a simple math CAPTCHA
        $number1 = rand(1, 9);
        $number2 = rand(1, 9);
        $captchaQuestion = "$number1 + $number2";
        $captchaAnswer = $number1 + $number2;

        // Store CAPTCHA answer in session
        session(['captcha_answer' => $captchaAnswer]);

        return response()->json(['question' => $captchaQuestion]);
    }
}
