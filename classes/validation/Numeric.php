<?php
namespace TechStore\Classes\validation;
class Numeric implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (!is_numeric($value))
        {
            return "$name is should be numeric";
        }
        else return false;
    
    }

}