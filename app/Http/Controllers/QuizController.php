<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class QuizController extends Controller
{
    public function getPilgan(){
        return view('quiz.quiz1');
    }
}