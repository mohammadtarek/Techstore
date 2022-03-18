<?php
namespace TechStore\Classes\models;
use  TechStore\Classes\Db;
class Cats extends Db{
public function __construct()
{
    $this->table="cats";
    $this->connect();
}
}