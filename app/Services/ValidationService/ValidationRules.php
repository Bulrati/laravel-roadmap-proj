<?php

namespace App\Services;

use Illuminate\Support\Arr;

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
                'regex'    => '/^[a-z\d_-]*$/i'
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
                'exists'   => 'post_statuses,id',
            ],
        ],
    ];

    /**
     * Get set of rules for the specific entity
     *
     * @param  string  $entityName
     *
     * @return array
     */
    public static function get(string $entityName): array
    {
        $resultRules = self::concatenateRules(Arr::get(self::RULES, $entityName));

        return $resultRules;
    }

    /**
     * Get set of rules for the specific entity except of some rules
     *
     * @param  string  $entityName
     * @param  array  $rulesToExclude
     *
     * @return array
     */
    public static function except(string $entityName, array $rulesToExclude = []): array
    {
        $rules = Arr::get(self::RULES, $entityName);
        foreach ($rulesToExclude as $ruleToExclude => $ruleValue) {
            if (!empty(Arr::get($rules, $ruleToExclude)) && array_key_exists(
                    $ruleValue,
                    Arr::get($rules, $ruleToExclude)
                )) {
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

    /**
     * Concatenate array of rules into the string
     *
     * @param  array  $rawRules
     *
     * @return array
     */
    protected static function concatenateRules(array $rawRules): array
    {
        $resultRules = [];
        if (!empty($rawRules)) {
            foreach ($rawRules as $ruleName => $rulesArray) {
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
