<?php


namespace app\core;

/**
 * 
 * 
 * It contains all the core model functions for our child model classes.
 * 
 * @author George Mouchtaridis <giorgosmoucht@gmail.com>
 * @package app\core
*/

abstract class Model
{
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';
    public const RULE_MATCH = 'match';

    public array $errors = [];  // Store all errors from validate(), and send them back to the controller.


    // Since this function is abstract, every child class should implement this function.
    abstract public function rules(): array;

    // Read data that are posted by the user.
    // Before every validation of a model, loadData() is required to be called.
    public function loadData($data)
    {
        foreach($data as $key => $value) {
            /* Note:
                * As opposed with isset(), property_exists() returns true
                * even if the property has the value of null.
                * Sometimes we want that so we can echo errors if the property is null.
            */
            if(property_exists($this , $key)) {
                $this->{$key} = $value;
            }
        }
    }

    // Validate all the rules variables that model has defined.
    public function validate()
    {   
        // Each attribute can have multiple rules.
        // So we need to iterrate over all the rules of each attribute.
        foreach($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach($rules as $rule) {
                $ruleName = $rule;
                if(!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }
                
                // Validate RULE_REQUIRED
                if($ruleName === self::RULE_REQUIRED && !$value) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }

                // Validate RULE_EMAIL  
                if($ruleName === self::RULE_EMAIL && !filter_var($value , FILTER_VALIDATE_EMAIL)) {
                    $this->addError($attribute, self::RULE_EMAIL);
                }

                // Validate RULE_MIN
                if($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }

                // Validate RULE_MAX
                if($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }

                // Validate RULE_MATCH
                if($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    $this->addError($attribute, self::RULE_MATCH, $rule);
                }

            }
        }

        return empty($this->errors);
    }

    public function addError(string $attribute , string $rule , $params = [])
    {
        $message = $this->errorMessages()[$rule] ?? '';

        /* Note:
         * Replace the params with the actual value.
         * For example the error message of RULE_MAX contains '{max}'.
         * This must be replaced with the validation number (24).
        */
        foreach($params as $key => $value) {
            $message = str_replace("{{$key}}", $value , $message);
        }
        $this->errors[$attribute][] = $message;
    }

    public function errorMessages()
    {
        return [
            self::RULE_REQUIRED => 'This field is required',
            self::RULE_EMAIL => 'This field must be a valid email address',
            self::RULE_MIN => 'Minimum length of this field must be {min}',
            self::RULE_MAX => 'Maximum length of this field must be {max}',
            self::RULE_MATCH => 'This field must be the same as {match}',
        ];
    }

    // Returns true if validation has an error.
    public function hasError($attribute)
    {
        return $this->errors[$attribute] ?? false;
    }

    public function getFirstError($attribute)
    {
        return $this->errors[$attribute][0] ?? false;
    }
}

?>