<?php

namespace App\Http\Requests;

use App\Question;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;

class Mision2Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'answer'    =>  'required',
        ];

    }

    public function messages()
    {
        return [
            'answer.required'  => 'Jawab dong Mae...^_^',
        ];
    }
}
