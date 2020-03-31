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
            'author_id.required' => 'Author field is required',
            'author_id.integer'  => 'Wrong value for the Author field',
            'author_id.exists'   => 'Author is not exist',
            'slug.required'      => 'Slug field is required',
            'slug.string'        => 'Slug should be a string',
            'slug.unique'        => 'This slug value is already exist',
            'slug.regex'         => 'Slug should contain only letters, numbers, \'_\', \'-\'',
            'title.required'     => 'Title field is required',
            'title.string'       => 'Title should be a string',
            'excerpt.max'        => 'Excerpt is too long. Max symbols: 255',
            'status_id.required' => 'Status field is required',
            'status_id.integer'  => 'Wrong value for the Status field',
            'status_id.exists'   => 'Status id not exist',
        ];
    }


}
