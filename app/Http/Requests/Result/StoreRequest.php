<?php

namespace App\Http\Requests\Result;

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
            'min' => 'required|integer|min:0',
            'max' => 'required|integer|min:1',
        ];
    }
}
