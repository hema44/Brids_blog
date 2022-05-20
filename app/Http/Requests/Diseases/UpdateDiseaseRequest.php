<?php

namespace App\Http\Requests\Diseases;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiseaseRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string',
            'Symptoms' => 'string',
            'category'=>'numeric'
        ];
    }
}
