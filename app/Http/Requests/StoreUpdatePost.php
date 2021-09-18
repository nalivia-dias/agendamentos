<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
            'id' => 'required',
            'nome' => 'required| min:3|max:160',
            'telefone' => 'required| min:3|max:160',
            'data' => 'required',
            'convenio' => 'required| min:3|max:160',
            'sexo' => 'required',
            'idade' => 'required',
            'etinia' => 'required', 'min:5', 'max:160',
        ];
    }
}
