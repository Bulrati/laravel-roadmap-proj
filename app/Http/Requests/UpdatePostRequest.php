<?php

namespace App\Http\Requests;

use App\Facades\ValidationRulesService;

class UpdatePostRequest extends BaseRequest
{
    public $validationRulesService;


    public function __construct(
        ValidationRulesService $validationRulesService,
        array $query = [],
        array $request = [],
        array $attributes = [],
        array $cookies = [],
        array $files = [],
        array $server = [],
        $content = null
    ) {
        parent::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
        $this->validationRulesService = $validationRulesService;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->validationRulesService::except('post', ['slug' => 'unique']);
    }
}
