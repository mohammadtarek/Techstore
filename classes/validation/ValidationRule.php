<?php
namespace TechStore\Classes\validation;
interface ValidationRule
{
    public function check (string $name, $value);

}