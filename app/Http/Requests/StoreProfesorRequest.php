<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfesorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
<<<<<<< HEAD
        return true;
=======
        return false;
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
<<<<<<< HEAD
            "nombre"=>"string|required|min:5|max:50",
            "email"=>"string|required|unique:profesors",
            "edad" => "integer|between:10,100",
            "DNI" => 'required|string',
=======
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
            //
        ];
    }
}
