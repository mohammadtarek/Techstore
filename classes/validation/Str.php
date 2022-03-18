<?php
namespace TechStore\Classes\validation;
class Str implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (!is_string($value))
        {
            return "$name should be string";
        }
        else return false;
    
    }

}