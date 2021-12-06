<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormSeriesRequest extends FormRequest
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
            'nome' => 'required|min:2'
        ];
    }

    public function messages(){
        return[
            'required' => 'O campo :attribute precisa ser preenchido',
            'min' => 'O campo :attribute precisa ter ao menos :min caracteres',
        ];
    }
};