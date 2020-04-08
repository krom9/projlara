<?php

namespace App\Http\Requests\Ask;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => 'required|max:500',
            'mark' => 'required|integer|min:0',
        ];
    }
}
