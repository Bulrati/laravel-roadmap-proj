<?php

namespace App\Http\Requests;

use App\Facades\ValidationRulesService;
use App\Services\ValidationRules;

class UpdatePostRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ValidationRulesService::except('post', ['slug' => 'unique']);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'exists'      => 'Such :attribute does not exist',
            'slug.unique' => 'This :attribute is already exist',
            'slug.regex'  => ':attribute should contain only letters, numbers, \'_\', \'-\'',
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
