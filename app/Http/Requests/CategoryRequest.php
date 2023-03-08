<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'unique:categories,name'],
            'description' => ['string', 'min:12', 'nullable'],
            'keywords' =>  ['string', 'min:12', 'nullable'],
            'images.*' => ['mimes:jpeg,jpg,png,gif,pdf,svg']
        ];
    }
}
