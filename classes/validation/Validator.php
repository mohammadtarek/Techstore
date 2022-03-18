<?php
namespace TechStore\Classes\validation;
class Validator
{
    private $error;
    public function validate(string $name, $value, array $rules)
    {
        foreach ($rules as $rule) {
            $obj = new $rules;

            $error = $obj->check($name, $value);
            if ($error !== false) {
                $this->errors[] = $error;
            }
        }
    }

    public function geterrors()
    {
        return $this->errors;
    }
    public function haserrors()
    {
        if (empty($this->errors)) {
            return false;
        }
        return true;
    }
}
