@extends('main_layout2')

@section('title')
    <a class="navbar-brand" href="#">Istirahat lagi, Sholat dulu, minta petunjuk ama Allah SWT </a>
@endsection

@section('content')

    <section style="background: white" id="contact">
        <div style="padding: 0" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="restOke" style="color: #0d3625"></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {!! Form::open(['url' => 'quiz']) !!}
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Next Mision</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </section>

@endsection