<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeQuestion extends Model
{
    protected $table = 'type_questions';

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
