<?php
namespace TechStore\Classes\validation;
class Required implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (empty($value))
        {
            return "$name is required";
        }
        else return false;
    
    }

}