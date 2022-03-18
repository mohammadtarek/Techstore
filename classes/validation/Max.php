<?php
namespace TechStore\Classes\validation;
class Max implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (strlen($value)>255)
        {
            return "$name should be less 255";
        }
        else return false;
    
    }

}