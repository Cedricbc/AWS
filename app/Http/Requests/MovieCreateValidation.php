<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieCreateValidation extends FormRequest
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
            'movie_name' => ['required'],
            'movie_description' => ['required']
        ];
    }

    /**
     * Messages
     */
    public function messages()
    {
        return [
            'movie_name.required' => 'Movie name is required .',
            'movie_description.required' => ' Movie description is required .'
        ];
    }
}
