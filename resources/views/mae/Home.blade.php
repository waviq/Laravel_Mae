@extends('main_layout2')

@section('title')
    <a class="navbar-brand area" href="{{url(action('QuizController@getMision2Quiz1'))}}">Start Mision</a>
@endsection

@section('content')
    <img class="img-responsive" src="{{asset('img/mae.png')}}" alt="">
    <div class="intro-text">

        <span class="name"></span>

        <hr class="star-light">
        <span class="skills">Click <b style="color: #2a0efa">Start Mission</b> if you want know Who Am I</span><br>
        <span class="skills">Promise you want answer all questions with Honest and Deepest of heart</span>
    </div>
@endsection