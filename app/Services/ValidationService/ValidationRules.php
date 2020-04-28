<?php

namespace App\Services;

class ValidationRules
{
    const RULES = [
        'post' => [
            'author_id' => [
                'required' => true,
                'integer'  => true,
                'exists'   => 'users,id'
            ],
            'slug'      => [
                'required' => true,
                'string'   => true,
                'unique'   => 'posts',
                'regex'    => '/^[a-zA-Z0-9_-]*$/'
            ],
            'title'     => [
                'required' => true,
                'string'   => true,
            ],
            'excerpt'   => [
                'max' => 255,
            ],
            'status_id' => [
                'required' => true,
                'integer'  => true,
//                'exists'   => 'post_statuses.id',
            ],
        ],
    ];

    public static function get(string $entityName): array
    {
        $resultRules = self::concatenateRules(self::RULES[$entityName]);

        return $resultRules;
    }

    public static function except(string $entityName, array $rulesToExclude = []): array
    {
        $rules = self::RULES[$entityName];
        foreach ($rulesToExclude as $ruleToExclude => $ruleValue) {
            if ( ! empty($rules[$ruleToExclude]) && array_key_exists($ruleValue,
                    $rules[$ruleToExclude])) {
                unset($rules[$ruleToExclude][$ruleValue]);
            }
        }

        $rules = self::concatenateRules($rules);
        return $rules;
    }

    /**
     * Form default rule string
     *
     * @param  string  $name
     * @param  mixed  $value
     *
     * @return string
     */
    protected static function formDefaultRule(string $name, $value): string
    {
        if (is_bool($value)) {
            return $response = $value ? $name : '';
        }

        if (is_array($value)) {
            $value = implode(',', $value);
        }

        $response = "{$name}:{$value}";

        return $response;
    }

    protected static function concatenateRules(array $rulesMainArray)
    {
        $resultRules = [];
        if ( ! empty($rulesMainArray)) {
            foreach ($rulesMainArray as $ruleName => $rulesArray) {
                $rules = [];
                foreach ($rulesArray as $rule => $value) {
                    $rules[] = self::formDefaultRule($rule, $value);
                }
                $resultRules[$ruleName] = implode('|', $rules);
            }
        }

        return $resultRules;
    }
}
