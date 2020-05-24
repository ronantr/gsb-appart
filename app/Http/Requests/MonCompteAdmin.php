<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonCompteAdmin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['required', 'string', 'max:100'],
            'name' => ['required', 'string', 'max:100'],
            'codepostal' => ['required', 'string', 'max:100'],
            'ville' => ['required', 'string', 'max:100'],
            'pays' => ['required', 'string', 'max:100'],
            'year' => ['required', 'numeric', 'min:1950', 'max:' . date('Y')],
            'description' => ['required', 'string', 'max:500'],
        ];
    }
}
