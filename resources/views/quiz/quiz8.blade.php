@extends('main_layout2')

@section('title')
    <a class="navbar-brand" href="#">Misi 3: Kepo Banget</a>
@endsection

@section('navRight')
    <li class="page-scroll">
        <a href="#">honest</a>
    </li>
    <li class="page-scroll">
        <a href="#">hearty</a>
    </li>
    <li class="page-scroll">
        <a href="#">happiness</a>
    </li>
@endsection

@section('content')

    <section style="background: white" id="contact">
        <div style="padding: 0" class="container">
            <div class="row">
                @if($question->answered == 1)
                    <div class="col-lg-3">
                        <div style="text-align: center" class="alert alert-success">
                            <strong>Makasih ya,</strong> Sudah dijawab.
                        </div>
                    </div>
                @endif
                <div class="col-lg-12 text-center">
                    <h2 style="color: #0d3625">Jika kamu nge fens dengan suatu <br/> tokoh pria di novel, kamu harus menjadi seperti</h2>
                    <hr class="star-primary">
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {!! Form::open(['url' => 'quiz']) !!}


                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {!!  Form::hidden('id', 8)!!}
                            <div style="text-align: left; color: #1a242f"
                                 class="form-group col-xs-12 form-group controls">
                                <p> {!! Form::radio('answer','Dilan') !!} Dilan</p> <br/>
                                <p> {!! Form::radio('answer','Nandan') !!} Nandan</p> <br/>
                                <p> {!! Form::radio('answer','Dirimu sendiri') !!} Dirimu sendiri</p> <br/>

                            </div>
                            @include('errors.validasi')

                        </div>

                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Next</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </section>

@endsection