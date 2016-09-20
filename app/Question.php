<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function typeQuestions(){
        return $this->belongsTo(TypeQuestion::class);
    }
}
