<?php
namespace TechStore\Classes\validation;
use  TechStore\Classes\Db;
require_once('classes/db.php');
class Email implements ValidationRule
{
    public function check(string $name, $value)
    {
        if (!filter_var( $value,FILTER_VALIDATE_EMAIL) )
        {
            return "$name should be valid ";
        }
        return false;
    
    }

}