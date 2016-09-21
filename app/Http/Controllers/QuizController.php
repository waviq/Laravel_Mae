<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mision2Request;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class QuizController extends Controller
{
    public function getMision2Quiz1(){

        $question = Question::all()->first();
        return view('quiz.quiz1', compact('question'));
    }

    public function getMision2Quiz2(){

        $question = Question::all()->first();
        return view('quiz.quiz2', compact('question'));
    }

    public function getMision2Quiz3(){

        $question = Question::all()->first();
        return view('quiz.quiz3', compact('question'));
    }

    public function getMision2Quiz4(){

        $question = Question::all()->first();
        return view('quiz.quiz4', compact('question'));
    }

    public function getMision2Quiz5(){

        $question = Question::all()->first();
        return view('quiz.quiz5', compact('question'));
    }

    public function getRestMision1(){

        return view('quiz.restMision');
    }

    public function getMision3Quiz6(){

        return view('quiz.quiz6', compact('question'));
    }
    public function getMision3Quiz7(){

        return view('quiz.quiz7', compact('question'));
    }

    public function getMision3Quiz8(){

        return view('quiz.quiz8', compact('question'));
    }

    public function getRestMision2(){

        return view('quiz.restMision2');
    }

    public function postMission2(Mision2Request $request){

        $questionP = Question::all()->first();
        $id = Input::get('id');
        $answer = Input::get('answer');

        if ($answer == "on"){
            $answer = Input::get('answer2');
        }else{
            $answer = Input::get('answer');
        }


        $question = new Question();
        $question->id = $id;
        $question->question = $questionP->question;
        $question->answer = $answer;

        dd($question);




    }
}
