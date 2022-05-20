<?php

namespace App\Http\Requests\Diseases;

use Illuminate\Foundation\Http\FormRequest;

class DiseasesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' =>[ 'required','unique:diseases'],
            'Symptoms' => 'required|string',
            'category'=>'required'
        ];
    }
}
