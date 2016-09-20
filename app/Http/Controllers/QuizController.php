<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mision2Request;
use App\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class QuizController extends Controller
{
    public function getMision2(){

        $question = Question::all()->first();
        return view('quiz.quiz1', compact('question'));
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
