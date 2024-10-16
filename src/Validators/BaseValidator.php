<?php

namespace App\Emrah\Validators;

/**
 * When refactoring base validator
 * Add ability to validate based on SQL Field:
 *  -> ['name' => ['validateAs' => 'users.name']] (Get structure of name field from SQL table users)
 *      => Eg: users.email in the DB is VARCHAR(64), NULLABLE => Validate as string max length 64, nullable
 */

class BaseValidator
{

    const RULE_INT       = "int";
    const RULE_STRING    = "string";
    const RULE_EMAIL     = "email";
    const RULE_REQUIRED  = "required";
    const RULE_LENGTH    = "length";

    /**
     * @param array $rules
     * @param array $data
     * @return bool
     */
    protected function validate(array $rules, array $data): bool
    {
        foreach ($rules as $field => $validationRules)
        {
            foreach ($validationRules as $rule => $value)
            {
                if(!isset($data[$field])) {
                    return false;
                }
                $dataValue = trim($data[$field]);

                // TODO: Refactor, dummy code, proving point

                switch ($rule) {
                    case "type":
                        if($value === self::RULE_STRING && !is_string($dataValue)) {
                            return false;
                        }
                        if($value === self::RULE_INT && !is_int($dataValue)) {
                            return false;
                        }
                        if($value === self::RULE_EMAIL && !filter_var($dataValue, FILTER_VALIDATE_EMAIL)) {
                            return false;
                        }
                        break;
                    case self::RULE_REQUIRED:
                        if($dataValue === null) {
                            return false;
                        }
                        break;
                    case self::RULE_LENGTH:
                        if(isset($value['min'])) {
                            if(is_int($dataValue) && $dataValue < $value['min']) {
                                return false;
                            }

                            if(is_string($dataValue) && strlen($dataValue) < $value['min']) {
                                return false;
                            }

                            if(is_array($dataValue) && count($dataValue) < $value['min']) {
                                return false;
                            }
                        }
                        if(isset($value['max'])) {
                            if(is_int($dataValue) && $dataValue > $value['max']) {
                                return false;
                            }

                            if(is_string($dataValue) && strlen($dataValue) > $value['max']) {
                                return false;
                            }

                            if(is_array($dataValue) && count($dataValue) > $value['max']) {
                                return false;
                            }
                        }
                        break;
                }
            }
        }
        return 1;
    }
}