@extends('main_layout2')

@section('title')
    <a class="navbar-brand" href="#">Misi 2: Saling Kepo</a>
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
                    <h2 style="color: #0d3625">Isi Data dengan jujur ya, dosa loch kalo boong</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    {!! Form::open(['url' => 'quiz']) !!}


                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            {!!  Form::hidden('id', 3)!!}
                            <h4 style="color: #1a242f">Soal 3</h4>
                            <div style="text-align: left; color: #1a242f" class="form-group col-xs-12 form-group controls">
                                <p style="color: #1a242f;">Jika aku kalo lagi badmood bobok cantik. Dan jika kamu lagi marah atau badmood, apa yang kamu lakukan untuk meredam amarahmu</p>
                                {!! Form::radio('answer', 'Baca Al-Quran, dzikir, istigfar, dll ampe ilang setanya') !!} Baca Al-Qur'an, dzikir, istigfar, dll ampe ilang setanya <br />
                                {!! Form::radio('answer', 'Pergi ke mall bersama teman, nonton, dll') !!} Pergi ke mall bersama teman, nonton, dll <br />
                                {!! Form::radio('answer', 'Bobok cantik di kamar') !!} Bobok cantik di kamar <br />
                                {!! Form::radio('answer', 'Tergantung situasi dan kondisi') !!} Tergantung situasi dan kondisi <br />
                                <input type="radio" name="answer"  v-model="Model">Jawaban Lainya
                                <input style="font-size: 16px" class="form-control" name="answer2" type="text"
                                       placeholder="tulis jawaban disini dan kudu jujur ya"
                                       v-show="Model"/>
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