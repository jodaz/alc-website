<?php

namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

class TagsUpdateFormRequest extends FormRequest
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
            'name'  =>  'required|regex:/^[\pL\s\-]+$/u|unique:tags,name,'.$this->tag->id
        ];
    }

    public function attributes()
    {
        return [
            'name' =>  'Nombre'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  'Ingrese el :attribute de la etiqueta',
            'name.regex'    =>  'Ingrese solo caracteres no númericos',
            'name.unique'   =>  'La etiqueta, ya se encuentra registrada'
        ];
    }
}
