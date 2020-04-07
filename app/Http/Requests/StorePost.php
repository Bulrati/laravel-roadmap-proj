<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
            'author_id' => 'required|integer|exists:users,id',
            'slug'      => 'required|string|unique:posts|regex:/^[a-zA-Z0-9_-]*$/',
            'title'     => 'required|string',
            'excerpt'   => 'max:255',
            'status_id' => 'required|integer|exists:post_statuses,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'exists'            => 'Such :attribute does not exist',
            'slug.unique'       => 'This :attribute is already exist',
            'slug.regex'        => ':attribute should contain only letters, numbers, \'_\', \'-\'',
        ];
    }


    public function attributes()
    {
        return [
            'author_id' => 'author',
            'status_id' => 'status'
        ];
    }
}
