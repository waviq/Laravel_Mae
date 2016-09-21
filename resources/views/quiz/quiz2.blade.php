@extends('main_layout2')

@section('title')
    <a class="navbar-brand" href="#">Misi 2: Saling Kepo</a>
@endsection

@section('content')

    <section style="background: white" id="contact">
        <div style="padding: 0" class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="color: #0d3625">Isi Data dengan jujur ya, dosa loch kalo boong</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    {!! Form::open(['url' => 'quiz']) !!}


                        <div class="row control-group">
                            {{--<input type="checkbox"  v-model="checked">
                            <label style="color: #0d3625" for="checkbox">@{{ checked }}</label>--}}
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                {!!  Form::hidden('id', 2)!!}
                                <h4 style="color: #1a242f">Soal 2</h4>
                                <div style="text-align: left; color: #1a242f;" class="form-group col-xs-12 form-group controls">
                                   <p style="color: #1a242f;">Jika di hari weekend aku lebih memilih untuk mengisi waktu dengan berbagai macam kegiatan positif.
                                       Dari pilihan berikut ini, manakah yang kamu suka ketika mengisi waktu di hari weekend?</p>
                                    {!! Form::radio('answer', 'Pergi ke pengajian, ngajar ngaji, dan yang sejenisnya') !!} Pergi ke pengajian, ngajar ngaji, dan yang sejenisnya <br />
                                    {!! Form::radio('answer', 'Pergi ke mall bersama teman') !!} Pergi ke mall bersama teman <br />
                                    {!! Form::radio('answer', 'Bobok cantik di kamar') !!} Bobok cantik di kamar <br />
                                    {!! Form::radio('answer', 'Tergantung situasi dan kondisi') !!} Tergantung situasi dan kondisi <br />

                                    <input type="radio" name="answer"  v-model="Model">Jawaban Lainya
                                    <input style="font-size: 16px" class="form-control" name="answer2" type="text"
                                           placeholder="tulis jawaban disini dan kudu jujur ya"
                                           v-show="Model"/>
                                    {{--<p class="help-block text-danger"></p>--}}
                                </div>

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