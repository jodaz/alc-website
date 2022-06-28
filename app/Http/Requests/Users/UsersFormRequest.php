<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
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
            'name'      =>  'required|regex:/^[\pL\s\-]+$/u',
            'surname'   =>  'required|regex:/^[\pL\s\-]+$/u',
            'role' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];

        // if ($this->getMethod() == 'POST') {
        //     $rules += [
        //         'avatar'    =>  'required|image|mimes:jpg,jpeg,png,svg|max:2048',
        //         'email'     =>  'email:rfc,dns|unique:users,email',
        //         'role'      =>  'required'
        //     ];
        // }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name'      =>  'nombre',
            'surname'   =>  'apellido',
            'email'     =>  'correo electrónico',
            'role'      =>  'rol',
            // 'avatar'    =>  'imagen'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     =>  'Ingrese el :attribute del usuario',
            'name.regex'        =>  'Ingrese solo caracteres no númericos',
            'surname.required'  =>  'Ingrese el :attribute del usuario',
            'surname.regex'     =>  'Ingrese solo caracteres no númericos',
            'email.required'   =>  'Ingrese un correo electrónico',
            'email.unique'      =>  'El attribute, debe ya se encuentra registrado',
            'role.required'     =>  'Seleccione el :attribute del usuario',
            'status.required'   =>  'Seleccione un :attribute',
            'password.required' => 'Ingrese una contraseña'
            // 'avatar.required'   =>  'Cargue una :attribute del usuario',
            // 'avatar.image'      =>  'El archivo cargado debe ser de tipo :attribute',
            // 'avatar.mime'       =>  'Cargue una :attribute con las extensiones validas para las mismas',
            // 'avatar.max'        =>  'El tamaño máximo del archivo debe ser 2mb',
        ];
    }
}
