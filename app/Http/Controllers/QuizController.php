<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mision2Request;
use App\Question;
use Carbon\Carbon;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getMision2Quiz1(){

        $question = Question::where('id',1)->first();
        return view('quiz.quiz1', compact('question'));
    }

    public function getMision2Quiz2(){

        $question = Question::where('id',2)->first();
        return view('quiz.quiz2', compact('question'));
    }

    public function getMision2Quiz3(){

        $question = Question::where('id',3)->first();
        return view('quiz.quiz3', compact('question'));
    }

    public function getMision2Quiz4(){

        $question = Question::where('id',4)->first();
        return view('quiz.quiz4', compact('question'));
    }

    public function getMision2Quiz5(){

        $question = Question::where('id',5)->first();
        return view('quiz.quiz5', compact('question'));
    }

    public function getRestMision1(){

        return view('quiz.restMision');
    }

    public function getMision3Quiz6(){

        $question = Question::where('id',6)->first();
        return view('quiz.quiz6', compact('question'));
    }
    public function getMision3Quiz7(){

        $question = Question::where('id',7)->first();
        return view('quiz.quiz7', compact('question'));
    }

    public function getMision3Quiz8(){

        $question = Question::where('id',8)->first();
        return view('quiz.quiz8', compact('question'));
    }

    public function getRestMision2(){

        return view('quiz.restMision2');
    }
    public function getRestMision3(){

        return view('quiz.restMision3');
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


        $question = Question::where('id', $id)->first();

        if ($question->answered == 0){
            $question->id = $id;
            $question->user_id = \Auth::id();
            $question->answer = $answer;
            $question->answered = 1;
            $question->created_at = Carbon::now();

            $question->save();
            if ($id == 1){
                return redirect(url(action('QuizController@getMision2Quiz2')));
            }elseif ($id == 2){
                return redirect(url(action('QuizController@getMision2Quiz3')));
            }
            elseif ($id == 3){
                return redirect(url(action('QuizController@getMision2Quiz4')));
            }elseif ($id == 4){
                return redirect(url(action('QuizController@getMision2Quiz5')));
            }elseif ($id == 5){
                return redirect(url(action('QuizController@getRestMision1')));
            }elseif ($id == 6){
                return redirect(url(action('QuizController@getMision3Quiz7')));
            }elseif ($id == 7){
                return redirect(url(action('QuizController@getMision3Quiz8')));
            }elseif ($id == 8){
                return redirect(url(action('QuizController@getRestMision2')));
            }elseif ($id == 9){
                return redirect(url(action('QuizController@getRestMision1')));
            }

        }elseif ($question->answered == 1){
            if ($id == 1){
                return redirect(url(action('QuizController@getMision2Quiz2')));
            }elseif ($id == 2){
                return redirect(url(action('QuizController@getMision2Quiz3')));
            }
            elseif ($id == 3){
                return redirect(url(action('QuizController@getMision2Quiz4')));
            }elseif ($id == 4){
                return redirect(url(action('QuizController@getMision2Quiz5')));
            }elseif ($id == 5){
                return redirect(url(action('QuizController@getRestMision1')));
            }elseif ($id == 6){
                return redirect(url(action('QuizController@getMision3Quiz7')));
            }elseif ($id == 7){
                return redirect(url(action('QuizController@getMision3Quiz8')));
            }elseif ($id == 8){
                return redirect(url(action('QuizController@getRestMision2')));
            }elseif ($id == 9){
                return redirect(url(action('QuizController@getRestMision1')));
            }
        }





    }
}
