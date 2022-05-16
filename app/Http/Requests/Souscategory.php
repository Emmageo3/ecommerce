<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Souscategory extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'category_id' => ['required', 'integer'],
            'nom' => ['required', 'string', 'max:100'],
            'image' => ['required', 'string', 'max:255'],

        ];
    }
}
