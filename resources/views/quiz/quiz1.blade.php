@extends('main_layout2')

@section('title')
    <a class="navbar-brand" href="#">Misi 2: Untuk mengenal satu sama lain</a>
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
                    {!! Form::open(['url' => 'foo/bar']) !!}


                        <div class="row control-group">
                            {{--<input type="checkbox"  v-model="checked">
                            <label style="color: #0d3625" for="checkbox">@{{ checked }}</label>--}}
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h4 style="color: #1a242f">Soal 1</h4>
                                <div style="text-align: left; color: #1a242f" class="form-group col-xs-12 form-group controls">
                                   <p style="color: #1a242f;">Jika aku suka masakan pedas, masakan apa yang kamu sukai?</p>
                                    {!! Form::radio('masakan', 'Pedes') !!} Pedas <br />
                                    {!! Form::radio('masakan', 'Sedang') !!} Sedang <br />
                                    {!! Form::radio('masakan', 'Sedang') !!} Manis <br />
<<<<<<< HEAD
                                    {!! Form::radio('masakan', 'Sedang') !!} Lainya <br />
                                    <input type="text" class="form-control" placeholder="input kesukaan" required data-validation-required-message="Please enter input.">

                                    <input onclick="document.getElementById('custom').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" name="type">wanna custom url?
                                    <input type="text" name="custom" id="custom" placeholder="should be 5 charecters at least" >
                                    <br><br>
                                    <input onclick="document.getElementById('custom').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="type" value="customurl">random?

                                    <p class="help-block text-danger"></p>
=======
                                    <input type="radio" name="masakan" value="@{{ Model }}" v-model="Model">Jawaban Lainya
                                    <input style="font-size: 16px" class="form-control" type="text" placeholder="tulis jawaban disini dan kudu jujur ya"  v-show="Model"/>
                                    {{--<p class="help-block text-danger"></p>--}}
                                </div>

                                <h4 style="color: #1a242f">Soal 2</h4>
                                <div style="text-align: left; color: #1a242f" class="form-group col-xs-12 form-group controls">
                                    <p style="color: #1a242f;">Dari pilihan berikut ini, manakah yang kamu suka ketika mengisi waktu di hari libur?</p>
                                    {!! Form::radio('libur', 'Pergi ke pengajian, ngajar ngaji, dan ngajar-ngajar yang lainya') !!} Pergi ke pengajian, ngajar ngaji, dan yang sejenisnya <br />
                                    {!! Form::radio('libur', 'Pergi ke mall bersama teman') !!} Pergi ke mall bersama teman <br />
                                    {!! Form::radio('libur', 'Bobok cantik di kamar') !!} Bobok cantik di kamar <br />
                                    <input type="radio" name="libur" value="@{{ Model2 }}" v-model="Model2">Jawaban Lainya
                                    <input style="font-size: 16px" class="form-control" type="text" placeholder="tulis jawaban disini dan kudu jujur ya"  v-show="Model2"/>
                                    {{--<p class="help-block text-danger"></p>--}}
                                </div>

                                <h4 style="color: #1a242f">Soal 3</h4>
                                <div style="text-align: left; color: #1a242f" class="form-group col-xs-12 form-group controls">
                                    <p style="color: #1a242f;">Jika kamu lagi marah atau badmoot, apa yang kamu lakukan untuk meredam amarahmu</p>
                                    {!! Form::radio('libur', 'Pergi ke pengajian, ngajar ngaji, dan ngajar-ngajar yang lainya') !!} Baca Al-Qur'an, dzikir, istigfar ampe ilang setanya <br />
                                    {!! Form::radio('libur', 'Pergi ke mall bersama teman') !!} Pergi ke mall bersama teman, nonton, dll <br />
                                    {!! Form::radio('libur', 'Bobok cantik di kamar') !!} Bobok cantik di kamar <br />
                                    <input type="radio" name="libur" value="@{{ Model2 }}" v-model="Model2">Jawaban Lainya
                                    <input style="font-size: 16px" class="form-control" type="text" placeholder="tulis jawaban disini dan kudu jujur ya"  v-show="Model2"/>
                                    {{--<p class="help-block text-danger"></p>--}}
>>>>>>> remotes/origin/master
                                </div>
                            </div>

                        </div>

                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

@endsection