<?php

use Illuminate\Database\Seeder;

class MaeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  =>  'mae',
            'email'     =>  'mae',
            'password'  =>  Hash::make('mae'),
            'alamat'    =>  'cerbon',
            'tanggalLahir'  => '24 Maret 1990'
        ]);
        DB::table('users')->insert([
            'name'  =>  'waviq',
            'email'     =>  'waviq',
            'password'  =>  Hash::make('waviq'),
            'alamat'    =>  'Tegal',
            'tanggalLahir'  => '24 Maret 1990'
        ]);

        DB::table('type_questions')->insert([
            'id'   =>  1,
            'name'   =>  'Misi 1',
        ]);
        DB::table('type_questions')->insert([
            'id'   =>  2,
            'name'   =>  'Misi 2',
        ]);

        DB::table('type_questions')->insert([
            'id'   =>  3,
            'name'   =>  'Misi 3',
        ]);
        DB::table('type_questions')->insert([
            'id'   =>  4,
            'name'   =>  'Misi 4',
        ]);
        DB::table('type_questions')->insert([
            'id'   =>  5,
            'name'   =>  'Misi 5',
        ]);

        DB::table('questions')->insert([
            'id'   =>  1,
            'type_id'   =>  2,
            'user_id'   => 1,
            'no_question'   => 1,
            'question'  =>  'Jika saya suka masakan pedes, maka kamu suka masakan yang?'
        ]);

        DB::table('questions')->insert([
            'id'   =>  2,
            'type_id'   =>  2,
            'user_id'   => 1,
            'no_question'   => 2,
            'question'  =>  'Jika di hari weekend aku lebih memilih untuk mengisi waktu dengan berbagai macam kegiatan positif. Dari pilihan berikut ini, manakah yang kamu suka ketika mengisi waktu di hari weekend?'
        ]);

        DB::table('questions')->insert([
            'id'   =>  3,
            'type_id'   =>  2,
            'user_id'   => 1,
            'no_question'   => 3,
            'question'  =>  'Jika aku kalo lagi badmood bobok cantik. Dan jika kamu lagi marah atau badmood, apa yang kamu lakukan untuk meredam amarahmu'
        ]);

        DB::table('questions')->insert([
            'id'   =>  4,
            'type_id'   =>  2,
            'user_id'   => 1,
            'no_question'   => 4,
            'question'  =>  'Jika aku ada masalah seneng curhat Allah SWT, temen, minta masukan, dan jenisnya. Maka kamu?'
        ]);

        DB::table('questions')->insert([
            'id'   =>  5,
            'type_id'   =>  2,
            'user_id'   => 1,
            'no_question'   => 5,
            'question'  =>  'Jika aku seneng makan kue yang manis dan gratisan. Dan kamu seneng kamu seneng makan kue yang?'
        ]);

        DB::table('questions')->insert([
            'id'   =>  6,
            'type_id'   =>  2,
            'user_id'   => 1,
            'no_question'   => 6,
            'question'  =>  'LEBIH SENENG MANA, KOMUNIKASI VIA CHATTING ATAU TELFON?'
        ]);

        DB::table('questions')->insert([
            'id'   =>  7,
            'type_id'   =>  3,
            'user_id'   => 1,
            'no_question'   => 7,
            'question'  =>  'JIKA KAMU ADALAH TOKOH DI SUATU NOVEL, SAYA AKAN IBARATKAN AKU SEPERTI'
        ]);

        DB::table('questions')->insert([
            'id'   =>  8,
            'type_id'   =>  3,
            'user_id'   => 1,
            'no_question'   => 8,
            'question'  =>  'JIKA KAMU NGE FENS DENGAN SUATU 
                    TOKOH PRIA DI NOVEL, KAMU HARUS MENJADI SEPERTI'
        ]);

        DB::table('questions')->insert([
            'id'   =>  9,
            'type_id'   =>  4,
            'user_id'   => 1,
            'no_question'   => 9,
            'question'  =>  'Jika aku adalah calon pengeranmu, maka apa yang mesti aku rubah atau aku lakukan untukmu?'
        ]);

        DB::table('questions')->insert([
            'id'   =>  10,
            'type_id'   =>  4,
            'user_id'   => 1,
            'no_question'   => 10,
            'question'  =>  'Keluarkan semua uneg-uneg kamu jika memang ada'
        ]);





    }
}
