<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateFormRequest extends FormRequest
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
        $rules = [
            'title'         =>  'required|max:90',
            'tag_id'        =>  'required',
            'description'   =>  'required|max:155',
            'post'          =>  'required',
            'status'        =>  'required',
            'date'        =>  'required',
        ];

        if ($this->getMethod() == 'POST') {
            $rules += ['image' =>  'required|image|mimes:jpg,jpeg,png,svg|max:2048'];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'title'         =>  'título',
            'tag_id'        =>  'etiqueta',
            'description'   =>  'descripción',
            'post'          =>  'publicación',
            'status'        =>  'estado',
            'image'         =>  'Imagen'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        =>  'Ingrese el :attribute de la publicación',
            'title.regex'           =>  'Ingrese solo caracteres no númericos',
            'title.max'             =>  'El :attribute debe tener un máximo de 70 caracteres',
            'tag_id.required'       =>  'Seleccione una :attribute',
            'description.required'  =>  'Ingrese la :attribute de la publicación',
            'description.max'       =>  'La :attribute debe tener un máximo de 70 caracteres',
            'date.required'        =>  'Ingrese fecha de la publicación',
            'post.required'         =>  'Redacte la :attribute',
            'status.required'       =>  'Seleccione un :attribute',
            'image.required'       =>  'Cargue una :attribute para el artículo',
            'image.image'          =>  'El archivo cargado debe ser de tipo :attribute',
            'image.mime'           =>  'Cargue una :attribute con las extensiones validas para las mismas',
            'image.max'            =>  'El tamaño máximo del archivo debe ser 2mb',
        ];
    }
}
